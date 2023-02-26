@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/assets/css/pages/datatables.css" />
@endsection
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Pegawai</h3>
                </div>
            </div>
        </div>

        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">Data Pegawai
                    <button type="button"
                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahpegawai">
                        <i class="bi bi-person-fill-add"></i> Tambah Pegawai
                    </button>
                </div>
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Basic Tables end -->
    </div>
    <!--login form Modal -->
    <div class="modal fade text-left" id="tambahpegawai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">
                        Tambah Pegawai
                    </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form method="POST" action="/admin/tambah-pegawai" data-parsley-validate>
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="role" value="0"/>
                        <label>Nama: </label>
                        <div class="form-group">
                            <input required type="text" name="name" placeholder="Nama" class="form-control" />
                        </div>
                        <label>Email: </label>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control" data-parsley-type="email" data-parsley-error-message="Masukkan format email yang valid." />
                        </div>
                        <label>Nomor Telepon: </label>
                        <div class="form-group">
                            <input type="tel" name="phone_number" placeholder="Nomor Telepon" class="form-control" data-parsley-type="number"
                            data-parsley-error-message="Masukkan format nomor telepon yang valid." />
                        </div>
                        <label>Password: </label>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" id="password" data-parsley-minlength="8"
                            data-parsley-error-message="Kata sandi harus lebih besar dari atau sama dengan 8." />
                        </div>
                        <label>Konfirmasi Password: </label>
                        <div class="form-group">
                            <input type="password" name="password_confirm" placeholder="Konfirmasi Password" class="form-control" data-parsley-equalto="#password"
                            data-parsley-error-message="Kata sandi tidak cocok."/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="/assets/js/pages/datatables.js"></script>
    <script src="/assets/extensions/parsleyjs/parsley.min.js"></script>
    <script src="/assets/js/pages/parsley.js"></script>
@endsection
