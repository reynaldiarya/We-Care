<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Models\Berita;

class CampaignController extends Controller
{
    public function campaign()
    {
        return view('admin.campaign', [
            'title' => 'Daftar Campaign - We Care',
        ]);
    }

    public function news()
    {
        $news = Berita::with('user')->get();
        return view('admin.berita', [
            'title' => 'News Campaign - We Care',
            'news'  => $news,
        ]);
    }

    public function tambahnews()
    {
        $campaign = Campaign::with('user')->get();
        return view('admin.tambahberita', [
            'title' => 'News Campaign - We Care',
            'campaign'  => $campaign,
        ]);
    }

    public function uploadgambar(Request $request)
    {

        $path_url = 'storage/images/news';
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path($path_url), $fileName);
            $url = asset($path_url . '/' . $fileName);
        }

        return response()->json(['url' => $url]);
    }

    public function posttambahberita(Request $request)
    {
        $valid = $request->validate([
            'judul' => 'required|string',
            'tgl_terbit' => 'date|required',
            'user_id' => 'required',
            'campaign_id' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=4096,max_height=4096',
            'isi' => 'required',
        ]);
        $imagename = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('storage/images/thumbnail'), $imagename);

        $blog = new Berita;
        $blog->judul_berita = $request->input('judul');
        $blog->tgl_terbit_berita = $request->input('tgl_terbit');
        $blog->user_id = $request->input('user_id');
        $blog->campaign_id = $request->input('campaign_id');
        $blog->gambar_berita = $imagename;
        $blog->isi_berita = $request->input('isi');
        $blog->save();
        return redirect('/admin/campaign/berita')->with('message', 'Artikel berhasil ditambahkan');
    }
}
