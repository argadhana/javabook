@extends('admin.templat.index')
@section('title','Form Buku')
@section('panel-link')
	<li>Data Buku</li>
@endsection
@section('main')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading clearfix">@yield('title')</div>
		<div class="panel-body">
			<form class="form-horizontal row-border" action="{{url('admin/buku/store')}}" method="POST">
				<div class="form-group">
					<label class="col-md-2 control-label">Nama Buku</label>
					<div class="col-md-10">
						<input type="text" name="nama_buku" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label"></label>
					<div class="col-md-10">
						<input class="form-control money" type="text" name="placeholder" placeholder="placeholder">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">select</label>
					<div class="col-md-10">
						<select class="form-control selectpicker">
							<option>Hot Dog, Fries and a Soda</option>
							<option>Burger, Shake and a Smile</option>
							<option>Sugar, Spice and all things nice</option>
						</select>
					</div>
				</div>
				
					  
				<div class="btn-group pull-right">
					<a href="" class="btn btn-warning btn-lg">Batal</a>
					<button type="submit" class="btn btn-success btn-lg">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection