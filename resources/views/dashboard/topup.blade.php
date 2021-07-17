@extends('layouts.dashboard')
@section('content')
<div class="page-header">
    <h4 class="page-title">Topup Saldo</h4>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Topup Saldo</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Bank</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>BCA</option>
                        <option>Mandiri</option>
                        <option>BRI</option>
                        <option>BNI</option>
                        <option>BTPN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Nama Pengirim / Atas Nama Pengirim</label>
                    <input type="text" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email2">Jumlah Topup</label>
                            <input type="text" class="form-control" value="10000">
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
                <button class="btn btn-success">Kirim Permintaan Topup</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Cara Topup</div>
            </div>
            <div class="card-body">
                <p>
                    <ol>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>nteger cursus accumsan elit ac euismod.</li> 
                        <li>Mauris sed lectus quis lectus ultrices finibus<br></li> 
                        <li>Curabitur euismod dictum rutrum.</li> 
                        <li>Morbi id dolor euismod, ullamcorper urna at</li> 
                        <li>scelerisque quam. Aenean volutpat velit ut</li> 
                    </ol>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection