@extends('layout/main')

@section('judul','Tambah Data mahasiswa')

@section('container')
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">
			    <form action="" method="post">
			    @csrf
					 <div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan nama" value="{{old('nama')}}">
					    @error('nama')
					    	<div class="invalid-feedback">{{$message}}</div>
					    @enderror
					  </div>
					  <div class="form-group">
					    <label for="nrp">nrp</label>
					    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Masukan nrp" value="{{old('nrp')}}" >
					    @error('nrp')
					    	<div class="invalid-feedback">{{$message}}</div>
					    @enderror
					  </div>
					  <div class="form-group">
					    <label for="email">email</label>
					    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email" value="{{old('email')}}">
					    @error('email')
					    	<div class="invalid-feedback">{{$message}}</div>
					    @enderror
					  </div>
					  <div class="form-group">
					    <label for="jurusan">jurusan</label>
					    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukan jurusan" value="{{old('jurusan')}}">
					    @error('jurusan')
					    	<div class="invalid-feedback">{{$message}}</div>
					    @enderror
					  </div>
					<button type="submit" class=" btn btn-primary"> Tambah data Mahasiswa</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>

@endSection