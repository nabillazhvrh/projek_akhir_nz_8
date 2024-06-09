<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view(('pages.auth'));
    }

    public function test(Request $request) {
      $fname = $request['fname'];
      $name = $request['name'];

      return view ('pages.home', ['fname' => $fname, 'name' => $name]);
    }
}
