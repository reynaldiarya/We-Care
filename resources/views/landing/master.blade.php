<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Care</title>
    @yield('style')
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/hover.css">
    <link rel="stylesheet" href="/css/landing.css">
</head>


<body style="font-family: poppins; background-color:#F8F9FA;" id="body">
    <section class="shadow-sm" id="searchbar">
        <nav class="row navbar p-3 mobile" style="background-color:#435ebe;">
            <div class="container justify-content-between">
                <a href="/" class="navbar-brand" style="color: #ffffff;">
                    <img style="width: 35px; height: 100%" src="/assets/images/logo/logo.png"
                        alt="Logo">
                </a>
                <form class="d-flex" role="search">
                    <div class="container-input">
                        <input type="text" placeholder="Pencarian" name="text" class="input" aria-label="Search"
                            id="searchbox">
                        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </div>
                </form>
            </div>
        </nav>


        <nav class="navbar dekstop" style="background-color:#435ebe;">
            <div class="container py-2 px-4">
                <a href="/" class="navbar-brand" style="color: #ffffff;">
                    <img style="width: 35px; height: 100%" src="/assets/images/logo/logo.png"
                        alt="Logo">
                </a>
                <a href="/donasi-saya" class="nav-item px-2" style="color: #ffffff;text-decoration: none;">Donasi Saya</a>
                <a href="/campaign-saya" class="nav-item px-2" style="color: #ffffff;text-decoration: none;">Campaign Saya</a>
                <a href="/verifikasi-akun" class="nav-item px-2" style="color: #ffffff;text-decoration: none;">Verifikasi Akun</a>
                @auth
                    <div class="nav-item px-2">
                        <div class="dropdown">
                            <button style="color:#ffffff" class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/profil"><i class="icon-mid bi bi-person me-2"></i> Profil
                                        Saya</a>
                                </li>
                                <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item" href="/logout"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                          </div>

                    </div>
                @else
                    <a href="/login" class="nav-item px-2" style="color: #ffffff;text-decoration: none;">Login</a>
                @endauth
                <form class="ms-auto d-flex" role="search">
                    <div class="container-input">
                        <input type="text" placeholder="Pencarian" name="text" class="input" aria-label="Search"
                            id="searchbox2">
                        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </div>
                </form>
            </div>
        </nav>

    </section>

    <nav class="fixed-bottom mb-4 mobile">
        <div class="container-fluid" style="width: 100%;">
            <div class="container d-flex align-items-center justify-content-center shadow"
                style="background-image: linear-gradient(to bottom right, #364b98, #435ebe); height:75px; border-radius:750px; width: 97%; border: solid #ffffff 5px; margin: 0px; padding: 0px;">

                <div class="row">

                    <div class="col mx-3">
                        <a href="mailto:bemfv.unair@email.com"><img src="assets/img/home-icon-pink.png" alt=""
                                id="chat" style="height: 50px"></a>
                    </div>

                    <div class="col mx-3">
                        <a href=""><img src="assets/img/home-icon-pink.png" alt=""
                                style="height: 50px"></a>
                    </div>
                    <div class="col mx-3">
                        <a href=""
                            @auth data-bs-toggle="modal" data-bs-target="#profile" @else data-bs-toggle="modal" data-bs-target="#pesan" @endauth><img
                                src="assets/img/ava-icon-white.png" alt="" style="height: 50px"></a>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

        <footer class="py-3" style="background-color: rgb(255, 255, 255); border-radius: 20px;"
        class="py-3">
            <p class="text-center text-muted mt-3">&copy; <?php echo date('Y'); ?> We Care</p>
          </footer>

    <script src="{{ asset('js/splide.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script>
        var splide = new Splide('.splide', {
            perPage: window.innerWidth <= 480 ? 1 : 3, // menampilkan 1 slide pada tampilan mobile
            rewind: true,
        });

        // tambahkan event listener untuk memeriksa perubahan lebar layar dan menyesuaikan jumlah slide yang ditampilkan
        window.addEventListener('resize', function() {
            splide.options.perPage = window.innerWidth <= 480 ? 1 : 3;
            splide.destroy(false);
            splide.mount();
        });

        splide.mount();
    </script>

    <script>
        const search = document.getElementById('searchbox');
        const body = document.getElementById('body');
        const resultspace = document.getElementById('result');
        const categoryspace = document.getElementById('category');
        const items = body.querySelectorAll('.item');

        search.addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            items.forEach(function(item) {
                const filterData = item.getAttribute('data-filter').toLowerCase();
                if (filterData.includes(filter)) {
                    item.style.display = 'block';
                    resultspace.classList.add("d-none");
                    categoryspace.classList.add("d-none");
                } else {
                    item.style.display = 'none';
                    resultspace.classList.remove("d-none");
                    categoryspace.classList.add("d-none");
                }
            });

        }); //end event listener
    </script>

    <script>
        const search2 = document.getElementById('searchbox2');
        search2.addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            items.forEach(function(item) {
                const filterData = item.getAttribute('data-filter').toLowerCase();
                if (filterData.includes(filter)) {
                    item.style.display = 'block';
                    resultspace.classList.add("d-none");
                    categoryspace.classList.add("d-none");
                    // categoryspace.classList.add("d-none");
                } else {
                    item.style.display = 'none';
                    resultspace.classList.remove("d-none");
                    categoryspace.classList.add("d-none");
                    // categoryspace.classList.remove("d-none");
                }
            });

        }); //end event listener
    </script>

    @yield('script')
</body>

</html>
