@extends('auth.auth')
@section('content')
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="/"><img style="width: 300px; height: 100%"  src="assets/images/logo/wecare.png" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Lupa Password</h1>
            <p class="auth-subtitle mb-3">Masukkan email Anda dan kami akan mengirimkan link reset password</p>

            <form method="POST" action="/lupa-password">
                @csrf
                <div class="form-group position-relative has-icon-left mb-3">
                    <input type="text" name="email" class="form-control form-control" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block shadow-lg mt-3">Kirim</button>
            </form>
            <div class="text-center mt-3">
                <p class='text-gray-600'>Ingat akun Anda? <a href="login" class="font-bold">Masuk</a>.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
            <img src="assets/images/bg/clarity-login.png" style="background-size: cover; height: 100%" alt="clarity login">
        </div>
    </div>
</div>
@endsection
