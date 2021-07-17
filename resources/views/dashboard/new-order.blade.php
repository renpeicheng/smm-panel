@extends('layouts.dashboard')
@section('content')
<div class="page-header">
    <h4 class="page-title">Pesanan Baru</h4>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Buat Pesanan Baru</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Kategori</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Instagram</option>
                        <option>Youtube</option>
                        <option>Facebook</option>
                        <option>TikTok</option>
                        <option>Twitter</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Layanan</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Instagram Followers Worldwide</option>
                        <option>Instagram Followers Indonesia</option>
                        <option>Instagram Likers Worldwide</option>
                        <option>Instagram Likers Indonesia</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email2">Minimum Pesanan</label>
                            <input type="text" readonly class="form-control" value="1000">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email2">Maksimum Pesanan</label>
                            <input type="text" readonly class="form-control" value="30000">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email2">Masukan Username / Link</label>
                    <input type="text" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email2">Jumlah</label>
                            <input type="text" class="form-control" value="1000">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email2">Total Harga</label>
                            <input type="text" readonly class="form-control" value="100.000">
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">Saya setuju dengan syarat & Ketentuan yang berlaku</span>
                    </label>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success">Pesan Sekarang</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Cara pemesanan</div>
            </div>
            <div class="card-body">
                <p>
                    <ol>
                        <li>Pilih kategori dan layanan yang anda butuhkan</li>
                        <li>Akan muncul harga,minimal order,maksimal order dan keterangan layanan</li> 
                        <li>Masukan data dengan format yang benar. Pisahkan tiap data dengan enter.<br>
                        contoh :<br>
                        nurmantg<br>
                        </li> 
                        <li>Masukan jumlah pembelian yang anda inginkan</li> 
                        <li>Akan muncul total harga untuk pembelian anda</li> 
                        <li>Lalu pesan!</li> 
                    </ol>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection