@extends('admin.template.index')
@section('title', 'Data Text Bahasa')
@section('main')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading"> 
				<a href="{{route('text-bahasa.create')}}" class="btn btn-primary pull-right"><em class="fa fa-plus"></em> Tambah</a>
			</div>
			<div class="panel-body table-responsive">
				@if(session()->get('success'))
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						{{ session()->get('success') }}
					</div>
				@endif
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="20">#</th>
							<th>Bahasa</th>
							<th>Negara</th>
							<th width="8%">ISO <small style="font-size:11px;margin-left:3px;">[<a href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank" title="List of ISO 639-1 codes">link</a>]</small></th>
							<th>Keterangan</th>
							<th>Act</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 0; @endphp
						@foreach ($datas as $data)
						@php $no++; @endphp
							<tr>
								<td>{{$no}}</td>
								<td class="text-capitalize">{{$data->bahasa}}</td>
								<td class="text-capitalize">{{$data->negara}}</td>
								<td class="text-lowercase">{{$data->iso}}</td>
								<td>{{$data->ket}}</td>
								<td class="nowrap">
									<form action="{{route('text-bahasa.destroy',$data->id)}}" method="POST">
										<a href="{{route('text-bahasa.edit',$data->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
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
