<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class AddContentController extends Controller
{
    public function index()
    {
        return view('content.input.index');
    }

    public function store(Request $request)
    {
        $content = $request->all();

        $file = $request->file('picture_path');
        $originalNameFile = $file->getClientOriginalName();
        $content['picture_path'] = $file->storeAs('file', $originalNameFile);
        
        Content::create($content);
        return back();
    }
}
