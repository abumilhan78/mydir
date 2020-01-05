@extends('layout/main')

@section('title','Form Tambah Data Mahasiswa')

@section('container')
  	<div class="container">
  		<div class="row">
  			<div class="col-8">
  				 <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
              
             <form method="post" action="/students">
              @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan Nama">
                  @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="nrp">NRP</label>
                  <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Masukan nrp">
                  @error('nrp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email">
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan jurusan">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>

    			</div>
    		</div>
    	</div>
@endsection
  