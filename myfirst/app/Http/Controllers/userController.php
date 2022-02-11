<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
    public function index()
    {
        //return DB::select("select * from user"); //one way to select data
        //return User::all(); // second method select data
        
        //return Http::get('https://reqres.in/api/users?page=1'); //get data from other client 
        $collection = Http::get('https://reqres.in/api/users?page=1');
        return view('about',['collection'=>$collection['data']]);
    }
}
