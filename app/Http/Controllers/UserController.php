<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class UserController extends Controller
{
    public function index(){
        $data = Book::get();
        return view('user.dash', compact('data'));
    }
}
