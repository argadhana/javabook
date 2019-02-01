@extends('admin.template.index')
@section('title')
	{{$header}} Data Penerbit
@endsection
@section('panel-link')
	<li>Data Penerbit</li>
@endsection
@section('main')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading clearfix"><a href="{{route('penerbit.index')}}" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Kembali</a></div>
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
				<form class="form-horizontal row-border" action="{{route('penerbit.update',$data->id)}}" method="POST" enctype="multipart/form-data">
				@method("PATCH")
			@else				
				<form class="form-horizontal row-border" action="{{route('penerbit.store')}}" method="POST" enctype="multipart/form-data">
			@endif
				@csrf
				<div class="form-group">
					<label class="col-md-2 control-label">Nama *</label>
					<div class="col-md-10">
						<input type="text" name="nama" class="form-control" required value="@if (isset($data->id)) {{$data->nama}} @endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Didirikan</label>
					<div class="col-md-10">
						<div class="input-group">
							<input type="text" name="didirikan" class="form-control date datepicker" value="@if (isset($data->id)) {{$data->didirikan == '1970-01-01' ? '': date('d-m-Y',strtotime($data->didirikan))}}@endif">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Kantor Pusat</label>
					<div class="col-md-10">
						<input type="text" name="kantor_pusat" class="form-control" value="@if (isset($data->id)) {{$data->kantor_pusat}} @endif" placeholder="exp : Jakarta, Jawa Barat">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Pemilik</label>
					<div class="col-md-10">
						<input type="text" name="pemilik" class="form-control" value="@if (isset($data->id)) {{$data->pemilik}} @endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Induk Perusahaan</label>
					<div class="col-md-10">
						<input type="text" name="induk_perusahaan" class="form-control" value="@if (isset($data->id)) {{$data->induk_perusahaan}} @endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Situs Web</label>
					<div class="col-md-10">
						<input type="text" name="situs_web" class="form-control" placeholder="exp : www.example.com" value="@if (isset($data->id)) {{$data->situs_web}} @endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Logo</label>
					<div class="col-md-10">
						<input type="file" name="img" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Keterangan</label>
					<div class="col-md-10">
						<textarea name="ket" class="form-control editor">@if (isset($data->id)) {{$data->ket}} @endif</textarea>
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