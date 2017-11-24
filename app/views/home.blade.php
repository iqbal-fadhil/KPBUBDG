@extends('layout')
@section('content')

<div class="container">
		<section class="section-padding">
			<div class="jumbotron text-center">
				
				<div class="panel panel-default">

			@if ($projects->isEmpty())
				<p> Sedang tidak ada Proyek KPBU Kota Bandung!</p>
				@else
			
			<div>
				<a href="{{route('create')}}" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-plus-sign"></span>Tambah Proyek</a><br><br>
			</div>

			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Gambar</th>
						<th>Judul Proyek</th>
						<th>Nilai</th>
						<th>Unit Kerja</th>
						<th>Lokasi</th>
					</tr>
				</thead>
			<tbody>
				@foreach($projects as $project)
					<tr>
						<td>{{ $project->id_project }} </td>
<!-- 						<td><img src="/images/{id_proyek}.png" style="width:128px;height:72px;"><td>
 -->
<!-- <img src="{{asset('images/'.$project->picture)}}" width="300px"> -->
<td><img src="{{asset('images/'.$project->foto_name)}}" width="300px"></td>
 						<td>{{ $project->judul }}</td>
						<td>{{ $project->nilai}}</td>
						<td>{{ $project->unit_kerja}}</td>
						<td>{{ $project->lokasi}}</td>						
					</tr>
				@endforeach
			</tbody>
			</table>
			@endif 
		</div>

</div>

</section>
</div>
@stop