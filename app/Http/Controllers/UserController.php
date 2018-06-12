<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UserController extends Controller
{


    public function login(Request $request)
    {
        Config::set('auth.guards.api.provider', 'users');
        $request->request->add([
            'grant_type' => 'password',
            'client_id' => 3,
            'client_secret' => 'L7uEXY9X5OPYYHjQO0V0xWv23qHgAl2FgBMKkpCu',
            'username' => "amir@apporio.com",
            'password' => "123456",
            'scope' => '',
            'pass_id' => "hello"
        ]);

        // Fire off the internal request.
        $token_generation_after_login = Request::create(
            'oauth/token',
            'POST'
        );
        $collect_response = \Route::dispatch($token_generation_after_login)->getContent();
        print_r($collect_response);
    }

    public function login12(Request $request)
    {
        Config::set('auth.guards.api.provider', 'driver');
      //  $pro = Config::set('auth.guards.api.provider');
        //print_r($pro);die();
        $request->request->add([
            'grant_type' => 'password',
            'client_id' => 3,
            'client_secret' => 'L7uEXY9X5OPYYHjQO0V0xWv23qHgAl2FgBMKkpCu',
            'username' => "amir@apporio.com",
            'password' => "123456",
            'scope' => '',
            'pass_id' => "hello"
        ]);

        // Fire off the internal request.
        $token_generation_after_login = Request::create(
            'oauth/token',
            'POST'
        );
        $collect_response = \Route::dispatch($token_generation_after_login)->getContent();
        print_r($collect_response);
    }
}
