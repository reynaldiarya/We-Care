@extends('landing.master')
@section('content')
    <div style="height: 13vh; background-color:#212529"></div>
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
                            </input>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input disabled type="text" class="form-control" value="{{ Auth::user()->name }}">
                            <input name="user_id" type="hidden" class="form-control" value="{{ Auth::user()->id }}" required>
                            </input>
                        </div>
                        {{-- <div class="col-md-6">
                            <label class="form-label">Nama Inisiator</label>
                            <select name="nama_inisiator" type="text" class="form-select" readonly
                                aria-label="Default select example" required>
                                <option value="{{ Auth::user()->name }}" readonly>{{ Auth::user()->name }}</option>
                            </select>
                        </div> --}}
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
                {{-- <div class="mb-3">
                    <label class="form-label">Lokasi Campaign</label>
                    <select name="lokasi" class="form-select" aria-label="Default select example">
                        <option value="0">Jawa Timur</option>
                        <option value="1">Jawa Tengah</option>
                        @foreach ($services as $service)
            <option value="{{ $service->id }}">{{ $service->services_name }}</option>
            @endforeach
                    </select>
                </div> --}}
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
                <a href="{{ route('login') }}"><button type="submit" class="btn btn-success">Login</button></a>
            </div>
        @endauth
    </div>
@endsection
@section('script')
    <script>
        var nav = document.querySelector('nav');
        if (window.innerWidth <= 990) {
            nav.classList.add('bg-dark', 'shadow');
        } else {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 0) {
                    nav.classList.add('bg-dark', 'shadow');
                } else {
                    nav.classList.remove('bg-dark', 'shadow');
                }
            });
        }

        var switchButton = document.getElementById("flexSwitchCheckDefault");
        var change = document.getElementById("theme");
        var body = document.getElementsByTagName("body")[0];

        switchButton.addEventListener("click", function() {
            if (switchButton.checked) {
                body.classList.add("dark");
                body.classList.remove("light");
                change.innerHTML = "Dark Mode";
            } else {
                body.classList.add("light");
                body.classList.remove("dark");
                change.innerHTML = "Light Mode";
            }
        });
    </script>
@endsection
