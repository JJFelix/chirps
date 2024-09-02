<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserRegistration extends Controller
{
    public function postRegister(Request $request){
        $name = $request->input('name');
        echo 'Name: '.$name;
        echo '<br>';

        $username = $request->input('username');
        echo 'Username: '.$username;
        echo '<br>';

        $password = $request->input('password');
        echo 'Password: '.$password;


    }
}
