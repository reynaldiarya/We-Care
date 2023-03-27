@extends('landing.master')
@section('style')
    <link rel="stylesheet" href="/assets/css/main/blog.css">
@endsection
@section('content')
    <!-- Page Header-->
    @foreach ($artikel as $item)
        <header class="masthead" style="background-image: url('{{asset('/storage/images/thumbnail/'. $item->gambar_blog)}}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>{{ $item->judul_blog }}</h1>
                            <span class="meta">
                                Diterbitkan oleh {{ $item->user->name }}
                            </span>
                            <span class="meta">
                                Pada tanggal {{ date('d/m/Y', strtotime($item->tgl_terbit_blog)) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        {!! $item->isi_blog !!}
                    </div>
                </div>
            </div>
        </article>
    @endforeach
@endsection
@section('script')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            let scrollPos = 0;
            const mainNav = document.getElementById('mainNav');
            const headerHeight = mainNav.clientHeight;
            window.addEventListener('scroll', function() {
                const currentTop = document.body.getBoundingClientRect().top * -1;
                if (currentTop < scrollPos) {
                    // Scrolling Up
                    if (currentTop > 0 && mainNav.classList.contains('is-fixed')) {
                        mainNav.classList.add('is-visible');
                    } else {
                        console.log(123);
                        mainNav.classList.remove('is-visible', 'is-fixed');
                    }
                } else {
                    // Scrolling Down
                    mainNav.classList.remove(['is-visible']);
                    if (currentTop > headerHeight && !mainNav.classList.contains('is-fixed')) {
                        mainNav.classList.add('is-fixed');
                    }
                }
                scrollPos = currentTop;
            });
        })
    </script>
@endsection
