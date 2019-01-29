@extends('admin.template.index')
@section('title')
	{{$header}} Data Buku
@endsection
@section('panel-link')
	<li>Data Buku</li>
@endsection
@section('main')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading clearfix"><a href="{{route('buku.index')}}" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Kembali</a></div>
		<div class="panel-body">
				@if ($errors->any())
				<div class="alert alert-danger">
				  	<ul>
					  	@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
					  	@endforeach
				  	</ul>
				</div><br />
			@endif
			@if (isset($data->id))
				<form class="form-horizontal row-border" action="{{route('buku.update',$data->id)}}" method="POST">
				@method('PATCH')
			@else
				<form class="form-horizontal row-border" action="{{route('buku.store')}}" method="POST">
			@endif
				@csrf
				<div class="form-group">
					<label class="col-md-2 control-label">Judul *</label>
					<div class="col-md-10">
						<input type="text" name="judul" class="form-control" required value="@if (isset($data->id)){{$data->judul}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Penulis *</label>
					<div class="col-md-10">
						<select name="penulis" class="form-control selectpicker" required></select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Penerbit *</label>
					<div class="col-md-10">
						<select name="penerbit" class="form-control selectpicker" required></select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Jenis Cover</label>
					<div class="col-md-10">
						<select name="cover" class="form-control selectpicker">
							@foreach ($covers as $cover)
								<option value="{{$cover->id}}" title="{{$cover->ket}}">{{$cover->jenis_cover}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Bahasa *</label>
					<div class="col-md-10">
						<select name="bahasa" class="form-control selectpicker" required>
							@foreach ($bahasa as $lang)
								<option value="{{$lang->id}}">{{$lang->bahasa}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Tahun Terbit *</label>
					<div class="col-md-10">
						<input type="text" name="tahun_terbit" class="form-control tahun" required value="@if (isset($data->id)){{$data->tahun_terbit}} @else{{date('m/Y')}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Jumlah Halaman</label>
					<div class="col-md-10">
						<input type="text" name="jumlah_halaman" class="form-control" value="@if (isset($data->id)){{$data->jumlah_halaman}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Berat (g)</label>
					<div class="col-md-10">
						<input type="text" name="berat" class="form-control" value="@if (isset($data->id)){{$data->berat}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Dimensi (cm)</label>
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-6">
								<input type="number" name="p" class="form-control" value="@if (isset($data->id)){{$data->p}}@endif" placeholder="Panjang Buku">
							</div>
							<div class="col-md-6">
								<input type="number" name="l" class="form-control" value="@if (isset($data->id)){{$data->l}}@endif" placeholder="Lebar Buku">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Stok *</label>
					<div class="col-md-10">
						<input type="number" name="stok" class="form-control" required value="@if (isset($data->id)){{$data->stok}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Keterangan</label>
					<div class="col-md-10">
						<textarea name="ket" class="form-control editor">@if (isset($data->id)){{$data->ket}}@endif</textarea>
					</div>
				</div>
				<div class="btn-group pull-right">
					<button type="reset" class="btn btn-warning btn-lg">Batal</button>
					<button type="submit" class="btn btn-success btn-lg">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection