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
        $all_campaign = Campaign::all()->where('status_campaign', 1);
        $campaign = Campaign::latest()->where('status_campaign', 1)->paginate(6);
        $blog = Blog::latest()->limit(3)->get();
        return view('landing.home', [
            'kategori' => $kategori,
            'blog' => $blog,
            'title' => 'We Care',
            'campaign'  => $campaign,
            'search' => $all_campaign,
        ]);
    }
}
