@extends('landing.master')
@section('content')
    <section id="item" style="background-color: rgb(255, 255, 255); border-radius: 20px;" class="item my-3 "
        data-filter="item">
        <div class="container p-4">
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        {{-- {{ "storage/".Auth::user()->photo }} --}}
                        <img src="{{ asset('/storage/' . $campaign->foto_campaign) }}" class="card-img-top"
                            alt="Banner Campaign">
                        <div class="card-body">
                            <h5 class="card-title">{{ $campaign->judul_campaign }}</h5>
                            <p class="card-text">{!! $campaign->deskripsi_campaign !!}</p>
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
                                        <p style="margin:0px;" class="text-muted">
                                            {{ date('d-m-Y', strtotime($campaign->tgl_akhir_campaign)) }}</p>
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
                                    style="background-color: #435ebe; border-radius:50px; color:#ffffff">Donasi
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
                                <div class="form-group p-2">
                                    <label for="nama">Nama Donatur</label>
                                    <div hidden>
                                        <input type="text" class="form-control" name="user_id"
                                            value="{{ Auth::user()->id }}">
                                        <input type="text" class="form-control" name="campaign_id"
                                            value="{{ $campaign->id }}">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="nama" class="form-control"
                                            value="{{ Auth::user()->name }}" disabled>
                                        <input type="hidden" name="nama" id="nama-hidden" class="form-control"
                                            value="{{ Auth::user()->name }}">
                                        <button class="btn btn-outline-secondary" style="background-color: #435ebe; color:#fff"
                                            onclick="toggleForm()" type="button">Kirim Sebagai Anonim</button>
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

                                </div>
                                <div class="form-group p-2">
                                    <label for="nomor-kartu">Jumlah Donasi</label>
                                    <input type="text" onkeyup="addCurrency(this)" class="form-control" id="nominal"
                                        name="nominal" required>
                                </div>
                                <div class="form-group p-2">
                                    <label for="nomor-kartu">Pesan / Do'a</label>
                                    <textarea name="pesan" type="input" class="form-control" rows="7" required></textarea>
                                </div>
                                <div class="row p-2">
                                    <button type="submit" class="btn btn-primary col"
                                        style="border-radius: 50px; background-color:#435ebe">Bayar</button>
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
@endsection
@section('script')
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
@endsection
