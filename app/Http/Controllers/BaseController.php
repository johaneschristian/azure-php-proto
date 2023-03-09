<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Utilities\MicrosoftAuthenticator;
use Auth;



class BaseController extends Controller
{
    private $tenant = "common";
    private $client_id =;
    private $client_secret =;
    private $callback = "http://localhost:8000/callback";
    private $scopes = ["user.read"];

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
        
        // Comparison with data in the database
        $matching_user = User::where(DB::raw('lower(email)'), strtolower($user_email))->first();
        
        if($matching_user == NULL) {
            $response_data = [
                "message" => "You don't have access to application"
            ];
            $response_status = 401;
        } else {
            Auth::login($matching_user);
            $response_data = [
                "message" => "You have been logged in"
            ];
            $response_status = 200;
        }

        return response()->json($response_data, $response_status);
    }

    public function registerEmail(Request $request) {
        $user = new User();
        $user->email = $request->email;
        $user->save();
        return redirect()->route('login');
    }
}
