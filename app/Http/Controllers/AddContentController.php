<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddContentController extends Controller
{
    public function index()
    {
        return view('content.input.index');
    }
}
