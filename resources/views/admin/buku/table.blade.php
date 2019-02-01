@extends('admin.template.index')
@section('title', 'Data Buku')
@section('main')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading"> 
				<a href="{{route('buku.create')}}" class="btn btn-primary pull-right"><em class="fa fa-plus"></em> Tambah</a>
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
							<th width="20%">Judul</th>
							<th>Penulis</th>
							<th>Penerbit</th>
							<th>Tahun Terbit</th>
							<th>Kategori</th>
							<th>Genre</th>
							<th>Jumlah Halaman</th>
							<th>Berat (g)</th>
							<th>Dimensi (P x L)</th>
							<th>Jenis Cover</th>
							<th>Bahasa</th>
							<th>Stok</th>
							<th>Keterenagan</th>
							<th>Act</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 0; @endphp
						@foreach ($datas as $data)
						@php $no++; @endphp
							<tr>
								<td>{{$no}}</td>
								<td>{{$data->judul}}</td>
								<td>{{$data->id_penulis}}</td>
								<td>{{$data->id_penerbit}}</td>
								<td>{{$data->tahun_terbit}}</td>
								<td>{{$data->id_kategori}}</td>
								<td>{{$data->id_genre}}</td>
								<td>{{$data->jumlah_halaman}}</td>
								<td>{{$data->berat}}</td>
								<td>{{$data->dimensi}}</td>
								<td>{{$data->id_jenis_cover}}</td>
								<td>{{$data->id_bahasa}}</td>
								<td>{{$data->stok}}</td>
								<td>{{$data->ket}}</td>
								<td class="nowrap">
									<form action="{{route('buku.destroy',$data->id)}}" method="POST">
										<a href="{{route('buku.edit',$data->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
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
