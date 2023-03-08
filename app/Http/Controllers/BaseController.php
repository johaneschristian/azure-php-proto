<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use myPHPnotes\Microsoft\Auth;
use App\Models\User;
use GuzzleHttp\Client;



class BaseController extends Controller
{
    private $tenant = "common";
    private $client_id = "6e2164e2-474d-458d-9857-76553f227531";
    private $client_secret = "xjz8Q~J-qlgkbVq2w4qIOH344bo6kCXiGyzDFdqD";
    private $callback = "http://localhost:8000/callback";
    private $scopes = ["User.Read"];

    private function retrieveEmail($access_token) {
        $client = new Client(['base_uri' => 'https://graph.microsoft.com']);
        $response = $client->request(
            'GET',
            '/v1.0/me',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token
                ]
            ]
        );

        $responseData = json_decode($response->getBody(), true);
        return $responseData['userPrincipalName'];
    }

    public function index() {
        $microsoft_auth = new Auth(
            $this->tenant, 
            $this->client_id, 
            $this->client_secret, 
            $this->callback, 
            $this->scopes
        );

        return view('index', ['microsoft'=>$microsoft_auth]);
    }

    public function callback(Request $request) {
        $auth_code = $request['code'];
        $microsoft_auth = new Auth(
            $this->tenant, 
            $this->client_id, 
            $this->client_secret, 
            $this->callback, 
            $this->scopes
        );

        $tokens = $microsoft_auth->getToken($auth_code, "");
        $access_token = $tokens->access_token;
        return $this->retrieveEmail($access_token);       
    }
}
