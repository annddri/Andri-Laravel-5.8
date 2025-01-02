@extends('layout.main')

@section('title', content: 'Tambah Data Laravel 5.8')

@section('container')
<h1 class="mt-3">Tambah Data Mahasiswa</h1>

<form action="/students" method="post" style="width: 35rem;">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama.." name="nama" value="{{ old('nama')}}">
        @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM.." name="nim" value="{{ old('nim')}}">
        @error('nim') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email.." name="email" value="{{ old('email')}}">
        @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Program Studi</label>
        <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" placeholder="Masukkan program studi.." name="prodi" value="{{ old('prodi')}}">
        @error('prodi') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <button class="btn text-bg-primary mt-2" type="submit">Tambah Data</button>
</form>

@endsection
