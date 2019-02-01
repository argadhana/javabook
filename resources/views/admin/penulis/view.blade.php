@extends('admin.template.index')
@section('title')
	{{$header}} Data Penulis
@endsection
@section('panel-link')
	<li>Data Penulis</li>
@endsection
@section('main')
	<div class="col-md-5">
		<div class="panel panel-default">
			<div class="panel-body">
				@if ($data->img)
					<img src="{{asset('')}}img/{{$data->img}}" class="img-responsive">
				@else
					<img src="{{asset('')}}img/No_Image_Available_2.png" class="img-responsive">
				@endif
			</div>
		</div>
	</div>
	<div class="col-md-7">
		<div class="panel panel-info">
			<div class="panel-heading"><span style="font-size:2vw;">Profil Lengkap Penulis</span>
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
				<a href="{{route('penulis.edit',$data->id)}}" class="pull-right panel-toggle"><em class="fa fa-pencil"></em></a>
				<a href="{{route('penulis.index')}}" class="pull-right panel-toggle"><em class="fa fa-arrow-left"></em></a>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<td><b>Nama Lengkap</b></td>
							<td>:</td>
							<td>{{$data->nama}}</td>
						</tr>
						<tr>
							<td><b>Umur</b></td>
							<td>:</td>
							@php
								$biday = new DateTime($data->tgl_lahir);
								$today = new DateTime();
								
								$diff = $today->diff($biday);	
							@endphp
							<td class="nowrap">{{ $diff->y.' Tahun' }}</td>
						</tr>
						<tr>
							<td><b>Lahir</b></td>
							<td>:</td>
							<td>{{$data->tempat_lahir.', '.date('d F Y',strtotime($data->tgl_lahir))}}</td>
						</tr>
						<tr>
							<td><b>Tempat Tinggal</b></td>
							<td>:</td>
							<td>{{$data->tempat_tinggal}}</td>
						</tr>
						<tr>
							<td><b>Kebangsaan</b></td>
							<td>:</td>
							<td>{{$data->kebangsaan}}</td>
						</tr>
						<tr>
							<td><b>Pendidikan</b></td>
							<td>:</td>
							<td>{{$data->pendidikan}}</td>
						</tr>
						<tr>
							<td><b>Aliran Sastra</b></td>
							<td>:</td>
							<td>{{$data->genre->genre}}</td>
						</tr>
						<tr>
							<td><b>Karya Terkenal</b></td>
							<td>:</td>
							<td>{{$data->karya_terkenal}}</td>
						</tr>
						<tr>
							<td><b>Mulai Debut</b></td>
							<td>:</td>
							<td>{{$data->mulai_debut = '1970-01-01' ? '': date('d/m/Y',strtotime($data->mulai_debut))}}</td>
						</tr>
						<tr>
							<td><b>Keterangan</b></td>
							<td>:</td>
							<td>{!! $data->ket !!}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection