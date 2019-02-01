@extends('admin.template.index')
@section('title')
	{{$header}} Data Penerbit
@endsection
@section('panel-link')
	<li>Data Penerbit</li>
@endsection
@section('main')
	<div class="col-md-5">
		<div class="panel panel-default">
			<div class="panel-body">
				@if ($data->img)
					<img src="{{asset('')}}img/penerbit/{{$data->img}}" class="img-responsive">
				@else
					<img src="{{asset('')}}img/No_Image_Available_2.png" class="img-responsive">
				@endif
			</div>
		</div>
	</div>
	<div class="col-md-7">
		<div class="panel panel-info">
			<div class="panel-heading"><span style="font-size:2vw;">Profil Lengkap Penerbit</span>
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
				<a href="{{route('penerbit.edit',$data->id)}}" class="pull-right panel-toggle"><em class="fa fa-pencil"></em></a>
				<a href="{{route('penerbit.index')}}" class="pull-right panel-toggle"><em class="fa fa-arrow-left"></em></a>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<td width="150"><b>Nama</b></td>
							<td>:</td>
							<td class="nowrap">{{$data->nama}}</td>
						</tr>
						<tr>
							<td><b>Didirikan</b></td>
							<td>:</td>
							<td>{{$data->didirikan == '1970-01-01' ? '-' : date('d F Y',strtotime($data->didirikan))}}</td>
						</tr>
						<tr>
							<td><b>Kantor Pusat</b></td>
							<td>:</td>
							<td>{{$data->kantor_pusat}}</td>
						</tr>
						<tr>
							<td><b>Pemilik</b></td>
							<td>:</td>
							<td>{{$data->pemilik}}</td>
						</tr>
						<tr>
							<td><b>induk Perusahaan</b></td>
							<td>:</td>
							<td>{{$data->induk_perusahaan}}</td>
						</tr>
						<tr>
							<td><b>Situs Web</b></td>
							<td>:</td>
							<td><a href="{{ 'http://'.$data->situs_web}}" target="_blank"><i>{{$data->situs_web}}</i></a></td>
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