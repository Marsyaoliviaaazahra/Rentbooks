<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function indexUsers(){
        $data = User::get();

        return view('dashboard.user', compact('data'));
    }

    // public function deleteIndex($id){
    //     User::where($id)->delete();
    //     return redirect(route('index'));
    // }
}
