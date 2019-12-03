@extends('layout/main')

@section('judul','Daftar mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h2>Daftar Mahasiswa</h2>
			<a href="/students/create" class=" btn btn-primary my-3">Tambah Data Mahasiswa</a>
			@if(session('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
			@endif
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach( $students as $student)


			    	<tr>
				      <th scope="row">{{$loop->iteration}}</th>
				      <td>{{ $student->nama }}</td>
				      <td>
				      	<a href="/students/{{$student->id}}" class="badge badge-success"> Show Detail </a>
				      </td>
				    </tr>
			    
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>

@endSection