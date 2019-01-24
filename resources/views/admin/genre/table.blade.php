@extends('admin.templat.index')
@section('title', 'Data Genre Buku')
@section('main')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading"> 
				<a href="{{route('genre.create')}}" class="btn btn-primary pull-right"><em class="fa fa-plus"></em> Tambah</a>
			</div>
			<div class="panel-body table-responsive">
				@if(session()->get('success'))
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						{{ session()->get('success') }}
					</div>
				@endif
				<table class="table table-bordered table-hover datatable nowrap">
					<thead>
						<tr>
							<th width="20">#</th>
							<th width="20%">Genre Buku</th>
							<th>Deskripsi</th>
							<th width="150px">Act</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0; ?>
						@foreach ($datas as $data)
						<?php $no++; ?>
							<tr>
								<td>{{$no}}</td>
								<td>{{$data->genre}}</td>
								<td>{{$data->keterangan}}</td>
								<td>
									<form action="{{route('genre.destroy',$data->id)}}" method="POST">
										<a href="{{route('genre.edit',$data->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
