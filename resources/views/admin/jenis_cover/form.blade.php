@extends('admin.template.index')
@section('title')
	{{$header}} Jenis Cover Buku
@endsection
@section('panel-link')
	<li>Data Jenis Cover Buku</li>
@endsection
@section('main')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading clearfix"><a href="{{route('jenis-cover.index')}}" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Kembali</a></div>
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
				<form class="form-horizontal row-border" action="{{route('jenis-cover.update',$data->id)}}" method="POST">
				@method("PATCH")
			@else				
				<form class="form-horizontal row-border" action="{{route('jenis-cover.store')}}" method="POST">
			@endif
				@csrf
				<div class="form-group">
					<label class="col-md-2 control-label">Jenis cover</label>
					<div class="col-md-10">
						<input type="text" name="jenis_cover" class="form-control" required value="@if (isset($data->id)) {{$data->jenis_cover}} @endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Keterangan</label>
					<div class="col-md-10">
						<textarea name="ket" cols="30" rows="5" class="form-control" required>@if (isset($data->id)) {{$data->ket}} @endif</textarea>
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