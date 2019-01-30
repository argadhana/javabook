@extends('admin.template.index')
@section('title')
	{{$header}} Data Penulis
@endsection
@section('panel-link')
	<li>Data Penulis</li>
@endsection
@section('main')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading clearfix"><a href="{{route('penulis.index')}}" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Kembali</a></div>
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
				<form class="form-horizontal row-border" action="{{route('penulis.update',$data->id)}}" method="POST">
				@method("PATCH")
			@else				
				<form class="form-horizontal row-border" action="{{route('penulis.store')}}" method="POST">
			@endif
				@csrf
				<div class="form-group">
					<label class="col-md-2 control-label">Nama *</label>
					<div class="col-md-10">
						<input type="text" name="nama" class="form-control" required value="@if (isset($data->id)) {{$data->nama}} @endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Mulai Debut</label>
					<div class="col-md-10">
						<div class="input-group">
							<input type="text" name="mulai_debut" class="form-control datepicker" value="@if (isset($data->id)) {{date('d-m-Y',strtotime($data->mulai_debut))}} @else {{date('d-m-Y')}} @endif">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Tempat/Tgl Lahir *</label>
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required value="@if (isset($data->id)) {{$data->tempat_lahir}} @endif">
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<input type="text" name="tgl_lahir" class="form-control datepicker" placeholder="Tanggal Lahir" required value="@if (isset($data->id)) {{date('d-m-Y',strtotime($data->tgl_lahir))}} @else {{date('d-m-Y')}} @endif">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>
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