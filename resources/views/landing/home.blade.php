@extends('landing.master')
@section('content')
    <section id="item" style="background-color: rgb(255, 255, 255); border-radius: 20px;" class="item my-3 "
        data-filter="item">
        <div class="container p-4">
            <h3 style="font-weight:bold; color: #435ebe;">Selamat Datang !</h3>
            <a href="" data-bs-toggle="modal" data-bs-target="#createcampaign" style="text-decoration: none;">
                <div class="hvr-grow shadow mt-3 d-flex align-items-center"
                    style="height: 250px; border-radius:25px; background-image: linear-gradient(to right, #435ebe, rgba(231, 231, 231, 0.5)), url('https://images.unsplash.com/photo-1615897570582-285ffe259530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'); background-size: cover;">
                    <div class="p-4" style="max-width:80%">
                        <h1 style="font-weight: inherit; color:#ffffff; font-size:35px;">Galang Dana Sekarang</h1>
                    </div>
                </div>
            </a>
        </div>

        <!-- modal -->
        <div class="modal fade" id="createcampaign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                @auth
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tatacara Galang Dana</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#create">Selanjutnya</button>
                        </div>
                    </div>
                @else
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Anda perlu login</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <a class="btn" style="border-radius: 50px; background-color:#435ebe; color:#ffffff"
                                href="/login">Login</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
        @auth
            <div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" class="row g-3" action="/createCampaign"enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" disabled
                                                value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Nama</label>
                                            <input disabled type="text" class="form-control"
                                                value="{{ Auth::user()->name }}">
                                            <input name="user_id" type="hidden" class="form-control"
                                                value="{{ Auth::user()->id }}" required>
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
                        </div>
                    </div>
                </div>
            </div>
        @endauth

    </section>

    <section data-filter="item" id="item" style="background-color: rgb(255, 255, 255); border-radius: 20px;"
        class="item my-3 py-3">
        <div class="container text-center">
            <div class="row p-4" style="font-size:medium">
                <button id="button_pendidikan" value="2" class="col hvr-grow"
                    style="background-color: white; border: none;">
                    <img src="assets/img/education.svg" alt="" style="height: 90px">
                    <div class="d-flex align-items-center justify-content-center">
                        <p style="margin: 0px;">Pendidikan</p>
                    </div>
                </button>
                <button id="button_sosial" value="1" class="col hvr-grow"
                    style="background-color: white; border: none;">
                    <img src="assets/img/social.svg" alt="" style="height: 90px">
                    <div class="d-flex align-items-center justify-content-center">
                        <p style="margin: 0px;">Sosial</p>
                    </div>
                </button>
                <button id="button_kesehatan" value="3" class="col hvr-grow"
                    style="background-color: white; border: none;">
                    <img src="assets/img/health.svg" alt="" style="height: 90px">
                    <div class="d-flex align-items-center justify-content-center">
                        <p style="margin: 0px;">Kesehatan</p>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <section data-filter="item" class="item splide my-3" aria-labelledby="carousel-heading" id="item"
        style="background-color: rgb(253, 253, 253); border-radius: 20px;">
        <div class="container p-4">
            <div class="col" style="width: 75%;">
                <h5 class="p-2" style="font-weight:bold; color: #435ebe;">Penggalangan Dana Mendesak</h5>
            </div>
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($campaign as $item)
                        <a href="campaign/{{ $item->id }}"
                            class="splide__slide d-flex justify-content-center px-2 py-1"
                            style="text-decoration: none; color:black">
                            <div class="card hvr-grow" style="width: 95%;  border-color: #435ebe;">
                                <img src="storage/{{ $item->foto_campaign }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5>{{ $item->judul_campaign }}</h5>
                                    </div>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar w-75" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                            style="background-color:#435ebe"></div>
                                    </div>
                                    <p class="card-text mt-2">Donasi terkumpul : {{ $item->dana_terkumpul }}</p>
                                    <p class="card-text">Aktif hingga : {{ date('d-m-Y', strtotime($item->tgl_akhir_campaign)) }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section data-filter="item" id="item" style="background-color: rgb(255, 255, 255); border-radius: 20px;"
        class="item my-3 py-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="container p-4">
                <div class="carousel-inner" style="border-radius: 8px;">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1581059686229-de26e6ae5dc4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80"
                            class="d-block w-100" alt="..." style="height: 30vh; object-fit: cover">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Aksi Penyaluran Dana Bantuan Tsunami</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, deserunt.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1475776408506-9a5371e7a068?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1058&q=80"
                            class="d-block w-100" alt="..." style="height: 30vh; object-fit: cover">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Penyaluran Dana Bantuan Korban Erupsi Semeru</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, aliquid.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1544257750-572358f5da22?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1215&q=80"
                            class="d-block w-100" alt="..." style="height: 30vh; object-fit: cover">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Penyaluran Dana Bantuan Korban Terdampak Badai</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, molestias!</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section data-filter="item" id="item" style="background-color: rgb(255, 255, 255); border-radius: 20px;"
        class="item my-3 py-3">
        <div class="container p-4">
            <div class="col" style="width: 75%;">
                <h5 class="p-2" style="font-weight:bold; color: #435ebe;">Artikel Terbaru</h5>
            </div>
            <div class="card-group">
                @foreach ($blog as $item)
                    <div class="card" style="border-color: #435ebe;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/blog/{{ $item->slug_blog }}"
                                    style="color: #212529; text-decoration: none;">{{ $item->judul_blog }}</a>
                            </h5>
                            <p class="card-text">
                                {!! Str::limit($item->isi_blog, 100) !!}
                            </p>
                            <p class="card-text"><small class="text-muted">Diperbarui
                                    {{ date('d-m-Y', strtotime($item->updated_at)) }}</small></p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5"><a href="/blog">
                    <div class="btn p-3" style="background-color: #435ebe; color:#fff">
                        Artikel Lainnya</div>
                </a></div>
        </div>
    </section>

    {{-- space search --}}
    <section id="result" class="d-none" style=" background-color: rgb(255, 255, 255); border-radius: 20px;">
        <div style="height:60px"></div>
        <div class="container text-center">
            <h5 class="p-4 mt-2" style="font-weight:bold; color: #435ebe;">Hasil Pencarian</h5>
            <button class="btn" style="border-radius: 50px; background-color:#435ebe"><a
                    style="color: #ffffff; text-decoration:none" href="/">
                    <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        viewBox="0 0 1024 1024">
                        <path
                            d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"
                            fill="#ffffff"></path>
                    </svg>
                    <span>Kembali</span></a>
            </button>
        </div>
        <div class="container">
            <div class="row justify-content-center p-4">
                @foreach ($search as $item)
                    <a href="campaign/{{ $item->id }}" class="item card hvr-grow m-2"
                        data-filter="{{ $item->judul_campaign }}"
                        style="width: 18rem; padding: 0px;  border-color: #435ebe; text-decoration: none; color:black">
                        <img src="storage/{{ $item->foto_campaign }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>{{ $item->judul_campaign }}</h5>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar w-75" role="progressbar" aria-label="Basic example"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                    style="background-color:#435ebe"></div>
                            </div>
                            <p class="card-text mt-2">Donasi terkumpul : {{ $item->dana_terkumpul }}</p>
                            <p class="card-text">Aktif hingga : {{ date('d-m-Y', strtotime($item->tgl_akhir_campaign)) }}</p>
                        </div>
                    </a>
                @endforeach

                <!-- dikeep 1 div kosongan buat tumbalnya kalo g gitu gamau kebaca yg paling bawah -->
                <div class="item card" data-filter="tumbal" style="width: 18rem; padding: 0px;">
                    <img src="https://images.unsplash.com/photo-1599059813005-11265ba4b4ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">contoh search filter yang tes Lorem ipsum dolor, sit amet consectetur
                            adipisicing
                            elit. Autem, dolor.</p>
                    </div>
                </div>
                <div style="height:100px"></div>
            </div>
        </div>
    </section>

    {{-- space category --}}
    <section id="category" class="d-none" style=" background-color: rgb(255, 255, 255); border-radius: 20px;">
        <div style="height:60px"></div>
        <div class="container text-center">
            <h5 class="p-4 mt-2" style="font-weight:bold; color: #435ebe;">Hasil Pencarian</h5>
            <button class="btn" style="border-radius: 50px; background-color:#435ebe"><a
                    style="color: #ffffff; text-decoration:none" href="/">
                    <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        viewBox="0 0 1024 1024">
                        <path
                            d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"
                            fill="#ffffff"></path>
                    </svg>
                    <span>Kembali</span></a>
            </button>
        </div>
        <div class="row justify-content-center p-4">
            @foreach ($search as $item)
                <a href="campaign/{{ $item->id }}" class="item card hvr-grow m-2"
                    data-filter="{{ $item->category_id }}"
                    style="width: 18rem; padding: 0px;  border-color: #435ebe; text-decoration: none; color:black">
                    <img src="storage/{{ $item->foto_campaign }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>{{ $item->judul_campaign }}</h5>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar w-75" role="progressbar" aria-label="Basic example"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                style="background-color:#435ebe"></div>
                        </div>
                        <p class="card-text mt-2">Donasi terkumpul : {{ $item->dana_terkumpul }}</p>
                        <p class="card-text">Aktif hingga : {{ date('d-m-Y', strtotime($item->tgl_akhir_campaign)) }}</p>
                    </div>
                </a>
            @endforeach

            <!-- dikeep 1 div kosongan buat tumbalnya kalo g gitu gamau kebaca yg paling bawah -->
            <div class="item card" data-filter="tumbal" style="width: 18rem; padding: 0px;">
                <img src="https://images.unsplash.com/photo-1599059813005-11265ba4b4ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">contoh search filter yang tes Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Autem, dolor.</p>
                </div>
            </div>
            <div style="height:100px"></div>
        </div>
    </section>
@endsection
@section('script')
    <!-- filter kesehatan -->
    <script>
        const kesehatan = document.getElementById('button_kesehatan');

        kesehatan.addEventListener('click', function() {
            const filter_category = this.value.toLowerCase();
            items.forEach(function(item) {
                const filterData = item.getAttribute('data-filter').toLowerCase();
                if (filterData.includes(filter_category)) {
                    item.style.display = 'block';
                    categoryspace.classList.add("d-none");
                } else {
                    item.style.display = 'none';
                    categoryspace.classList.remove("d-none");
                }
            });

        }); //end event listener
    </script>

    <!-- filter pendidikan -->
    <script>
        const pendidikan = document.getElementById('button_pendidikan');

        pendidikan.addEventListener('click', function() {
            const filter_category = this.value.toLowerCase();
            items.forEach(function(item) {
                const filterData = item.getAttribute('data-filter').toLowerCase();
                if (filterData.includes(filter_category)) {
                    item.style.display = 'block';
                    categoryspace.classList.add("d-none");
                } else {
                    item.style.display = 'none';
                    categoryspace.classList.remove("d-none");
                }
            });

        }); //end event listener
    </script>

    <!-- filter sosial -->
    <script>
        const sosial = document.getElementById('button_sosial');

        sosial.addEventListener('click', function() {
            const filter_category = this.value.toLowerCase();
            items.forEach(function(item) {
                const filterData = item.getAttribute('data-filter').toLowerCase();
                if (filterData.includes(filter_category)) {
                    item.style.display = 'block';
                    categoryspace.classList.add("d-none");
                } else {
                    item.style.display = 'none';
                    categoryspace.classList.remove("d-none");
                }
            });

        }); //end event listener
    </script>
@endsection
