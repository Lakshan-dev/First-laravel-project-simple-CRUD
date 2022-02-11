<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addMemberController extends Controller
{
    public function addMember(Request $req)
    {
        $data = $req->input('username');
        $req->session()->flash('username',$data);
        return redirect('register');
    }
}
