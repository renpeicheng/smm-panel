@extends('layouts.dashboard')
@section('content')
<div class="page-header">
    <h4 class="page-title">Riawayat Topup</h4>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Riwayat Topup</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rp. 30.000</td>
                                <td>Via Auto TOP UP (BNI)</td>
                                <td>SUKSES</td>
                                <td>26-06-2021 12:27:40</td>
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