@extends('errors.errors')
@section('title', __('Service Unavailable'))

@section('error')
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="/assets/images/samples/error-500.svg" alt="Not Found" />
                    <h1 class="error-title">503 Service Unavailable</h1>
                    <p class="fs-5 text-gray-600">
                        Situs web saat ini tidak tersedia. Coba lagi nanti atau hubungi pengembang.
                    </p>
                    <a href="/" class="btn btn-outline-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
