@extends('layouts.dashboard')
@section('content')
<div class="page-header">
    <h4 class="page-title">History</h4>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Riwayat Pesanan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Username / Link Target</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Kategori</th>
                                <th>Layanan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>nurmantg</td>
                                <td>Rp. 30.000</td>
                                <td>1000</td>
                                <td>Instagram</td>
                                <td>Instagram Followers Worldwide</td>
                                <td>26-06-2021 12:29:02</td>
                                <td>SUKSES</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});
		});
	</script>
@endsection