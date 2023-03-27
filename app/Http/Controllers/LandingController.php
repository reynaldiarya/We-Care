<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    const title = 'We Care';

    public function index()
    {
        $blog = Blog::latest()->paginate(3);
        return view('landing.home', [
            'title' => self::title,
            'blog' => $blog,
        ]);
    }
}
