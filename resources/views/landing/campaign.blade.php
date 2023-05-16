<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Care</title>
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <style>
        .item {
            display: block;
        }

        /* Menyembunyikan navbar di tampilan desktop */
        @media (min-width: 768px) {
            .dekstop {
                display: block;
            }

            .mobile {
                display: none;
            }
        }

        /* Menampilkan navbar di tampilan mobile */
        @media (max-width: 767px) {
            .dekstop {
                display: none;
            }

            .mobile {
                display: block;
            }
        }

        .container-input {
            position: relative;
        }

        .input {
            width: 150px;
            padding: 10px 0px 10px 40px;
            border-radius: 9999px;
            border: solid 1px #2B7A77;
            transition: all .2s ease-in-out;
            outline: none;
            opacity: 1;
        }

        .container-input svg {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translate(0, -50%);
        }

        .input:focus {
            opacity: 1;
            width: 250px;
        }
    </style>
</head>
<section class="shadow-sm fixed-top" id="searchbar">
    <nav class="row navbar p-3 mobile" style="background-color:#3AAFA9;">
        <div class="container justify-content-center">
            <button class="btn" style="border-radius: 50px; background-color:#F8F9FA"><a href="/"
                    style="text-decoration: none; color:black">
                    <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        viewBox="0 0 1024 1024">
                        <path
                            d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                        </path>
                    </svg>
                    <span>Kembali</span></a>
            </button>
        </div>
    </nav>

    <nav class="navbar dekstop" style="background-color:#3AAFA9;">
        <div class="container p-1">
            <a href="/" class="navbar-brand" style="color: #ffffff;">
                <h2>WeCare</h2>
            </a>
            <a href="" class="nav-item px-2" style="color: #ffffff;text-decoration: none;">Donasi Saya</a>
            @auth
                <form class="px-2" action="/logout" method="post">
                    @csrf
                    <button class="btn" type="submit" href="/logout"
                        style="background-color:#ffffff; border-radius:50px; color:#2B7A77">
                        Logout
                    </button>
                </form>
            @else
                <a href="/login" class="nav-item px-2" style="color: #ffffff;text-decoration: none;">Login</a>
            @endauth
            <form class="ms-auto d-flex" role="search">
            </form>
        </div>
    </nav>


</section>
<nav class="fixed-bottom mb-4 mobile">
    <div class="container-fluid" style="width: 100%;">
        <div class="container d-flex align-items-center justify-content-center shadow"
            style="background-image: linear-gradient(to bottom right, #2B7A77, #3AAFA9); height:75px; border-radius:750px; width: 97%; border: solid #ffffff 5px; margin: 0px; padding: 0px;">

            <div class="row">

                <div class="col mx-3">
                    <a href="mailto:bemfv.unair@email.com"><img src="{{ asset('assets/img/home-icon-pink.png') }}"
                            alt="" id="chat" style="height: 50px"></a>
                </div>

                <div class="col mx-3">
                    <a href="/"><img src="{{ asset('assets/img/home-icon-pink.png') }}" alt=""
                            style="height: 50px"></a>
                </div>
                <div class="col mx-3">
                    <a href=""
                        @auth data-bs-toggle="modal" data-bs-target="#profile" @else data-bs-toggle="modal" data-bs-target="#pesan" @endauth><img
                            src="{{ asset('assets/img/ava-icon-white.png') }}" alt="" style="height: 50px"></a>
                </div>
            </div>

        </div>
    </div>
</nav>

<body style="font-family: poppins; background-color:#F8F9FA;" id="body">

    <section id="item" style="background-color: rgb(255, 255, 255); border-radius: 20px;" class="item my-3 "
        data-filter="item">
        <div class="container p-4">
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        {{-- {{ "storage/".Auth::user()->photo }} --}}
                        <img src="{{ asset('storage/' . $campaign->foto_campaign) }}" class="card-img-top"
                            alt="Banner Campaign">
                        <div class="card-body">
                            <h5 class="card-title">{{ $campaign->judul_campaign }}</h5>
                            <p class="card-text">{{ $campaign->deskripsi_campaign }}</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="row">
                                    <div class="col d-flex me-4">
                                        <p class="me-1">Dana Terkumpul :</p>
                                        <p style="margin:0px;" class="text-success me-3">
                                            Rp{{ number_format($campaign->dana_terkumpul, 2, ',', '.') }}</p>
                                    </div>
                                    <div class="col d-flex me-4">
                                        <p class="me-1">Target Dana Donasi :</p>
                                        <p style="margin:0px;" class="text-success">
                                            Rp{{ number_format($campaign->target_campaign, 2, ',', '.') }}</p>
                                    </div>
                                    <div class="col d-flex me-4">
                                        <p class="me-1">Tanggal Berakhir :</p>
                                        <p style="margin:0px;" class="text-muted"> {{ date('d-m-Y', strtotime($campaign->tgl_akhir_campaign)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h6>Berita Campaign</h6>
                            <p>Informasi terbaru mengenai campaign akan diupdate di sini.</p>
                            <hr>
                            <h6>Doa dari Donatur</h6>
                            @foreach ($doa as $item)
                            <ul class="list-group">
                              <li class="list-group-item">{{ $item->keterangan }}</li>
                          </ul>
                            @endforeach

                            <hr>
                            <div class="row px-2"><a data-bs-toggle="modal" data-bs-target="#create" class="btn"
                                    style="background-color: #2B7A77; border-radius:50px; color:#ffffff">Donasi
                                    Sekarang</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100px"></div>
    </section>
    <div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title px-3 fs-5" id="staticBackdropLabel">Detail Donasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @auth
                    <div class="modal-body">
                        <div class="container">
                            <form id="donation-form" method="post" action="/donasi">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Donatur</label>
                                    <div class="mb-3" hidden>
                                        <input type="text" class="form-control" name="user_id"
                                            value="{{ Auth::user()->id }}">
                                        <input type="text" class="form-control" name="campaign_id"
                                            value="{{ $campaign->id }}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="nama" class="form-control"
                                            value="{{ Auth::user()->name }}" disabled>
                                        <input type="hidden" name="nama" id="nama-hidden" class="form-control"
                                            value="{{ Auth::user()->name }}">
                                        <button class="btn btn-outline-secondary"
                                            style="background-color: #3AAFA9; color:#fff" onclick="toggleForm()"
                                            type="button">Kirim Sebagai Anonim</button>
                                    </div>

                                </div>
                                <div class="form-group p-2">
                                    <label for="nomor-kartu">Jumlah Donasi</label>
                                    <input type="text" onkeyup="addCurrency(this)" class="form-control"
                                        id="nominal" name="nominal" required>
                                </div>
                                <div class="form-group p-2">
                                    <label for="nomor-kartu">Pesan / Do'a</label>
                                    <textarea name="pesan" type="input" class="form-control" rows="7" required></textarea>
                                </div>
                                <div class="row p-2">
                                    <button type="submit" class="btn btn-primary col"
                                        style="border-radius: 50px; background-color:#2B7A77">Bayar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @else
                    <script>
                        window.location = "/login";
                    </script>
                @endauth
            </div>
        </div>
    </div>
    <script>
        function toggleForm() {
            var namaInput = document.getElementById("nama");
            var namaHidden = document.getElementById("nama-hidden");
            var anonimButton = document.querySelector(".btn-outline-secondary");

            if (namaInput.disabled) {
                namaInput.disabled = false;
                namaInput.value = "{{ __('Anonim') }}";
                namaInput.addEventListener('input', function() {
                    namaHidden.value = namaInput.value;
                });
                anonimButton.textContent = "Kirim Sebagai User";
            } else {
                namaInput.disabled = true;
                namaInput.value = "{{ Auth::user()->name }}";
                namaHidden.value = "{{ Auth::user()->name }}";
                anonimButton.textContent = "Kirim Sebagai Anonim";
            }
        }
    </script>
    <script>
        function addCurrency(element) {
            // Ambil nilai input
            let value = element.value;

            // Hapus karakter selain angka
            value = value.replace(/[^\d]/g, '');

            // Tambahkan "Rp." di depan nilai
            value = "Rp" + value;

            // Assign nilai yang sudah diubah kembali ke input
            element.value = value;
        }
    </script>
    <script src="{{ asset('js/splide.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>
