@extends('landing.master')
@section('content')
    <div class="container mt-4 mb-4">
        <h1 class="py-4 mb-4">Start Campaign</h1>
        @auth
            <form method="post" class="row g-3" action="/createCampaign"enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" disabled value="{{ Auth::user()->email }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input disabled type="text" class="form-control" value="{{ Auth::user()->name }}">
                            <input name="user_id" type="hidden" class="form-control" value="{{ Auth::user()->id }}" required>
                        </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori Campaign</label>
                    <select name="category_id" class="form-select" aria-label="Default select example">
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">Judul Campaign</label>
                    <input name="judul_campaign" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Campaign</label>
                    <textarea name="deskripsi_campaign" type="text" class="form-control" cols="30" rows="10" required></textarea>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">Target Dana</label>
                    <input name="target_campaign" type="number" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Akhir Campaign</label>
                    <input name="tgl_akhir" type="date" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <strong>Banner Campaign</strong>
                    <input class="form-control" type="file" name="image" id="formFile" required>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        @else
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">You Need to Login First</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="centering p-4">
                <a href="{{ route('login') }}"><button type="submit" class="btn" style="">Login</button></a>
            </div>
        @endauth
    </div>
@endsection
