<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function post(Request $request)
    {
        $Author = new Author;
        $Author->
        fill($request->all())->save();
        return view('thank');
    }
}
