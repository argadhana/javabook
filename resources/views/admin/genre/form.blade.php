@extends('admin.templat.index')
@section('title')
	{{$header}} Genre Buku
@endsection
@section('panel-link')
	<li>Data Genre Buku</li>
@endsection
@section('main')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading clearfix"></div>
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
				<form class="form-horizontal row-border" action="{{route('genre.update',$data->id)}}" method="POST">
				@method('PATCH')
			@else
				<form class="form-horizontal row-border" action="{{route('genre.store')}}" method="POST">
			@endif
				@csrf
				<div class="form-group">
					<label class="col-md-2 control-label">Genre Buku</label>
					<div class="col-md-10">
						<input type="text" name="genre" class="form-control" required value="@if (isset($data->id)){{$data->genre}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Keterangan</label>
					<div class="col-md-10">
						<textarea name="keterangan" cols="30" rows="5" class="form-control" required>@if (isset($data->id)){{$data->keterangan}}@endif</textarea>
					</div>
				</div>
				<div class="btn-group pull-right">
					<a href="{{route('genre.index')}}" class="btn btn-warning btn-lg">Batal</a>
					<button type="submit" class="btn btn-success btn-lg">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection