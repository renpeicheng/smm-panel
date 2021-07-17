@extends('layouts.dashboard')
@section('content')
<div class="page-header">
    <h4 class="page-title">Daftar Harga</h4>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Harga Layanan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>Nama Layanan</th>
                                <th>Harga / Unit</th>
                                <th>Minimum Pembelian</th>
                                <th>Maksimum Pembelian</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Instagram</td>
                                <td>Instagram Followers WorldWide</td>
                                <td>Rp 30.000 / 1000</td>
                                <td>1000</td>
                                <td>30000</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi saepe explicabo dicta ducimus</td>
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