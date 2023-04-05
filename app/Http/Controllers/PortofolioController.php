<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = Content::latest()->get();
        return view('content.home.index', [
            'portofolio' => $portofolio
        ]);
    }

    public function detail(Content $content)
    {
        return view('content.detail.index', [
            $content => $content
        ]);
    }
}
