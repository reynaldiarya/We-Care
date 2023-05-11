<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Campaign;
use App\Models\Kategori;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    const title = 'We Care';

    public function index()
    {
        $kategori = Kategori::all();
        $all_campaign = Campaign::all();
        $campaign = Campaign::latest()->paginate(6);
        $blog = Blog::latest()->paginate(3);
        return view('landing.home', [
            'kategori' => $kategori,
            'blog' => $blog,
            'campaign'  => $campaign,
            'search' => $all_campaign,
        ]);
    }
}
