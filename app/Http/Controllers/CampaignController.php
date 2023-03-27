<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Carbon\Carbon;

class CampaignController extends Controller
{
    public function campaign()
    {
        $campaign = Campaign::all();
        return view('admin.campaign', [
            'campaign'  => $campaign,
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

    public function kategori()
    {
        $kategori = Kategori::all();
        return view('admin.kategori', [
            'title' => 'Kategori - We Care',
            'kategori' => $kategori,
        ]);
    }

    public function tambahkategori(Request $request)
    {
        $valid = $request->validate([
            'nama_kategori' => 'required|string|unique:kategori'
        ]);
        Kategori::create($valid);
        return back()->with('message', 'Kategori berhasil ditambahkan');
    }

    public function deletekategori()
    {
        Kategori::where('id', request('id'))->delete();
        return back()->with('message', 'Kategori berhasil dihapus');
    }

    public function buatcampaigndonatur()
    {
        $kategori = Kategori::all();
        return view('landing.createcampaign', [
            'title' => 'Kategori - We Care',
            'kategori' => $kategori,
        ]);
    }

    public function createcampaigndonatur(Request $request)
    {
        if ($request->isMethod('post')) {
            Campaign::create([
                'user_id' => $request->user_id,
                'category_id' => $request->category_id,
                'foto_campaign' => $request->file('image')->store('storage/images/campaign', 'public'),
                'judul_campaign' => $request->judul_campaign,
                'deskripsi_campaign' => $request->deskripsi_campaign,
                // 'lokasi_id' => $request->lokasi,
                'tgl_mulai_campaign' => Carbon::now(),
                'tgl_akhir_campaign' => $request->tgl_akhir,
                'target_campaign' => $request->target_campaign,
                'status_campaign' => 0,
            ]);
            return redirect('/');
        }
        return view('/');
    }
}
