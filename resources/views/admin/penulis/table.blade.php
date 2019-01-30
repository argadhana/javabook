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
				<table class="table table-bordered table-hover datatable">
					<thead>
						<tr>
							<th width="20">#</th>
							<th>Nama</th>
							<th>Umur</th>
							<th>Tempat/Tgl Lahir</th>
							<th>Mulai Debut</th>
							<th>Keterangan</th>
							<th width="150px">Act</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 0; @endphp
						@foreach ($datas as $data)
						@php $no++; @endphp
							<tr>
								<td>{{$no}}</td>
								<td>{{$data->nama}}</td>
								@php
									$biday = new DateTime($data->tgl_lahir);
									$today = new DateTime();
									
									$diff = $today->diff($biday);	
								@endphp
								<td>{{ $diff->y.' Tahun' }}</td>
								<td>{{$data->tempat_lahir.', '.date('d/m/Y',strtotime($data->tgl_lahir))}}</td>
								<td>{{date('d/m/Y',strtotime($data->mulai_debut))}}</td>
								<td>{{$data->ket}}</td>
								<td>
									<form action="{{route('penulis.destroy',$data->id)}}" method="POST">
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
			</div>
		</div>
	</div>
</div>
@endsection
