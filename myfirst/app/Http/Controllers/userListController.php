<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userListController extends Controller
{
    public function getList(){
        $list= User::paginate(5); //limited for 5 details
        return view('list',['Users'=>$list]);
    }

    public function addData(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->save();
        return redirect()->back();
    }

    public function deleteData($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('success','Item deleted successfully!'); //pass the success message
    }

    public function showData($id){ //for update
        $data = User::find($id);
        return view('update',['data'=>$data]);
    }

    public function updateData(Request $req){
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        return redirect('list')->with('update','Item updated successfully!');
    }
}
