<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getData(Request $request)
    {
        $request->validate([
            'username'=>'required | max:10',
            'userpassword'=>'required | min:5'
        ]);
        $data = $request->input();
        $request->session()->put('username',$data['username']);
        return redirect('home');
    }
}
