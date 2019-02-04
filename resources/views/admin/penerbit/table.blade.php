@extends('admin.template.index')
@section('title', 'Data Penerbit')
@section('main')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading"> 
				<a href="{{route('penerbit.create')}}" class="btn btn-primary pull-right"><em class="fa fa-plus"></em> Tambah</a>
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
							<th>Didirikan</th>
							<th>Kantor Pusat</th>
							<th width="100">Act</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 0; @endphp
						@foreach ($datas as $data)
						@php $no++; @endphp
							<tr>
								<td>{{$no}}</td>
								<td class="nowrap">{{$data->nama}}</td>
								<td>{{$data->didirikan == '1970-01-01' ? '-' : date('d F Y',strtotime($data->didirikan))}}</td>
								<td>{{$data->kantor_pusat}}</td>
								<td class="nowrap">
									<form action="{{route('penerbit.destroy',$data->id)}}" method="POST">
										<a href="{{route('penerbit.show',$data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i> Detail</a>
										<a href="{{route('penerbit.edit',$data->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
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
