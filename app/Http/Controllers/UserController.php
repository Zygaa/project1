<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function account(Request $reg){
      //return $reg->input();
      //return $reg->method();
      //return $reg->input('email');
      //$this->validate($reg, ['address' => 'required'], ['address.required' => 'Adres nie może być pusty']);

      $reg->validate(
        [
        'email' => 'required | min:5 | email',
        'password' => 'required'
        ],
        [
          'email.required' => 'Pole email jest wymagane',
          'email.min' => 'Pole email musi mieć minimum 5 znaków',
          'email.email' => 'Pole email musi być adresem poczty elektronicznej',
          'password.required' => 'Pole hasło jest wymagane'
        ]
      );
      return $reg->input();
    }
}
