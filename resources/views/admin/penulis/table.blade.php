@extends('admin.template.index')
@section('title', 'Data Penulis')
@section('main')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading"> 
				<a href="{{route('penulis.create')}}" class="btn btn-primary pull-right"><em class="fa fa-plus"></em> Tambah</a>
			</div>
			<div class="panel-body table-responsive">
				@if(session()->get('success'))
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						{{ session()->get('success') }}
					</div>
				@endif
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th width="20">#</th>
							<th>Nama</th>
							<th>Umur</th>
							<th>Lahir</th>
							<th>Kebangsaan</th>
							<th>Act</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 0; @endphp
						@foreach ($datas as $data)
						@php $no++; @endphp
							<tr>
								<td>{{$no}}</td>
								<td class="nowrap">{{$data->nama}}</td>
								@php
									$biday = new DateTime($data->tgl_lahir);
									$today = new DateTime();
									
									$diff = $today->diff($biday);	
								@endphp
								<td class="nowrap">{{ $diff->y.' Tahun' }}</td>
								<td>{{$data->tempat_lahir.', '.date('d F Y',strtotime($data->tgl_lahir))}}</td>
								<td>{{$data->kebangsaan}}</td>
								<td class="nowrap">
									<form action="{{route('penulis.destroy',$data->id)}}" method="POST">
										<a href="{{route('penulis.show',$data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i> Detail</a>
										<a href="{{route('penulis.edit',$data->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{$datas->links()}}
			</div>
		</div>
	</div>
</div>
@endsection
