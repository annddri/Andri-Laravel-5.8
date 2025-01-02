@extends('layout.main')

@section('title', content: 'Ubah Data Laravel 5.8')

@section('container')
<h1 class="mt-3">Ubah Data Mahasiswa</h1>

<form action="/students/{{$student->id}}" method="post" style="width: 35rem;">
    @method('patch')
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama.." name="nama" value="{{$student->nama}}">
        @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM.." name="nim" value="{{$student->nim}}">
        @error('nim') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email.." name="email" value="{{$student->email}}">
        @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Program Studi</label>
        <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" placeholder="Masukkan program studi.." name="prodi" value="{{$student->prodi}}">
        @error('prodi') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <button class="btn text-bg-primary mt-2" type="submit">Ubah Data</button>
</form>

@endsection
