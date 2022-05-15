<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function account(Request $reg){
      //return $reg->input();
      //return $reg->method();
      //return $reg->input('email');
      $reg->validate([
        'email' => 'required | min:5',
        'password' => 'required'
      ]);
      return $reg->input();
    }
}
