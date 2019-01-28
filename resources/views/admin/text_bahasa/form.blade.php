@extends('admin.template.index')
@section('title')
	{{$header}} Text Bahasa
@endsection
@section('panel-link')
	<li>Data Text Bahasa</li>
@endsection
@section('main')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading clearfix"><a href="{{route('text-bahasa.index')}}" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Kembali</a></div>
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
				<form class="form-horizontal row-border" action="{{route('text-bahasa.update',$data->id)}}" method="POST">
				@method('PATCH')
			@else
				<form class="form-horizontal row-border" action="{{route('text-bahasa.store')}}" method="POST">
			@endif
				@csrf
				<div class="form-group">
					<label class="col-md-2 control-label">Bahasa *</label>
					<div class="col-md-10">
						<input type="text" name="bahasa" class="form-control" required value="@if (isset($data->id)){{$data->bahasa}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Negara *</label>
					<div class="col-md-10">
						<input type="text" name="negara" class="form-control" required value="@if (isset($data->id)){{$data->negara}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">ISO <small style="font-size:11px;margin-left:3px;">[<a href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank" title="List of ISO 639-1 codes">link</a>]</small> *</label>
					<div class="col-md-10">
						<input type="text" name="iso" class="form-control" placeholder="Tolong menggunakan lowercase" required maxlength="2" value="@if (isset($data->id)){{$data->iso}}@endif">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Keterangan</label>
					<div class="col-md-10">
						<textarea name="ket" cols="30" rows="5" class="form-control">@if (isset($data->id)){{$data->ket}}@endif</textarea>
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