<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Utilities\MicrosoftAuthenticator;



class BaseController extends Controller
{
    private $tenant = "common";
    private $client_id = "4b49143a-2616-49c0-b33a-53dbc41d6e57";
    private $client_secret = "ecb8Q~BhpWYZmVYKCEMRyhlRb5J8yk8cmcFxpa2L";
    private $callback = "http://localhost:8000/callback";
    private $scopes = ["User.Read"];

    public function index() {
        $microsoft_auth = new MicrosoftAuthenticator(
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
        $microsoft_auth = new MicrosoftAuthenticator(
            $this->tenant, 
            $this->client_id, 
            $this->client_secret, 
            $this->callback, 
            $this->scopes
        );

        $access_token = $microsoft_auth->getAccessToken($auth_code);
        $user_email = $microsoft_auth->getUserEmailFromAccessToken($access_token);
        return [
            'email' => $user_email
        ];
    }
}
