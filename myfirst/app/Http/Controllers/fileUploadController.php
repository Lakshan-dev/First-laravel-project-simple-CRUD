<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUploadController extends Controller
{
    public function fileUpload(Request $req){
        return $req->file('file')->store('docs');
    }
}
