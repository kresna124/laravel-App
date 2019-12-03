@extends('layout/main')

@section('judul','Edit Data mahasiswa')

@section('container')
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Ubah Data Mahasiswa
			  </div>
			  <div class="card-body">
			    <form action="/students/{{$student->id}}" method="post">
			    	@method('patch')
			    	@csrf
					 <div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan nama" value="{{$student->nama}}">
					    @error('nama')
					    	<div class="invalid-feedback">{{$message}}</div>
					    @enderror
					  </div>
					  <div class="form-group">
					    <label for="nrp">nrp</label>
					    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Masukan nrp" value="{{$student->nrp}}" >
					    @error('nrp')
					    	<div class="invalid-feedback">{{$message}}</div>
					    @enderror
					  </div>
					  <div class="form-group">
					    <label for="email">email</label>
					    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email" value="{{$student->email}}">
					    @error('email')
					    	<div class="invalid-feedback">{{$message}}</div>
					    @enderror
					  </div>
					  <div class="form-group">
					    <label for="jurusan">jurusan</label>
					    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukan jurusan" value="{{$student->jurusan}}">
					    @error('jurusan')
					    	<div class="invalid-feedback">{{$message}}</div>
					    @enderror
					  </div>
					<button type="submit" class=" btn btn-primary"> Ubah data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>

@endSection