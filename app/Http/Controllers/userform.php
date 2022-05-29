<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class userform extends Controller
{
  public function show(){
    DB::table('user')
      ->insert(
        [
          'name' => $_POST['name'],
          'surname' => $_POST['surname'],
          'birthday' => $_POST['birthday']
        ]
      );
  }
}
