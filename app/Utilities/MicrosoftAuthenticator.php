<?php

namespace App\Utilities;
use GuzzleHttp\Client;

class MicrosoftAuthenticator {
    protected $microsoft_host = 'https://login.microsoftonline.com/';
    protected $graph_microsoft = 'https://graph.microsoft.com/v1.0/me';
    protected $tenant_id;
    protected $client_id;
    protected $client_secret;
    protected $callback_url;
    protected $scopes;

    public function __construct($tenant_id, $client_id, $client_secret, $callback_url, $scopes) {
        $this->tenant_id = $tenant_id;
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->callback_url = $callback_url;
        $this->scopes = $scopes;
    }

    public function getAuthUrl() {
        $request_parameters = [
            'client_id' => $this->client_id,
            'response_type' => 'code',
            'redirect_uri' => $this->callback_url,
            'response_mode' => 'query',
            'scope' => implode(' ', $this->scopes)
        ];

        $auth_url = $this->microsoft_host . $this->tenant_id . "/oauth2/v2.0/authorize?" . http_build_query($request_parameters);
        return $auth_url;
    }

    public function getToken(string $code)
    {
        $client = new Client();
        $url = $this->microsoft_host . $this->tenant_id . "/oauth2/v2.0/token";
        $tokens = $client->post($url, [
            'form_params' => [
                'client_id' => $this->client_id,
                'client_secret' => $this->client_secret,
                'redirect_uri' => $this->callback_url,
                'scope' => implode(' ', $this->scopes),
                'grant_type' => 'authorization_code',
                'code' => $code
            ],
        ])->getBody()->getContents();

        return json_decode($tokens);
    }

    public function getAccessToken($auth_code) {
        return $this->getToken($auth_code)->access_token;
    }

    public function getUserDataFromAccessToken($access_token) {
        $client = new Client();
        $auth_response = $client->get($this->graph_microsoft,
            ['headers' => [
                'Authorization' => 'Bearer ' . $access_token
            ]]
        );
        
        $user_data = json_decode($auth_response->getBody(), true);
        return $user_data;
    }

    public function getUserEmailFromAccessToken($access_token) {
        return $this->getUserDataFromAccessToken($access_token)['userPrincipalName'];
    }
}