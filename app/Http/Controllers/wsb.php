<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class wsb extends Controller
{
    public function show(){
      //return DB::select('select * from user');
      $users =  DB::table('user')->get();
      //return view('users', ['data' => $users]);
      DB::table('user')
        ->insert(
          [
            'name' => 'Paweł',
            'surname' => 'Kowalski',
            'birthday' => '2000-02-19' 
          ]
        );
    }
}
