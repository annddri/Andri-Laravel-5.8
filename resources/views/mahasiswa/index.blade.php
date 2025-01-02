@extends('layout.main')

@section('title', content: 'Mahasiswa Laravel 5.8')

@section('container')
<h1 class="container mt-3">Daftar Mahasiswa</h1>

<table class="table container">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $mhs )
            <tr>
                <td scope="row"> {{$loop->iteration}} </td>
                <td scope="row"> {{$mhs->nama}} </td>
                <td scope="row"> {{$mhs->nim}} </td>
                <td scope="row"> {{$mhs->email}} </td>
                <td scope="row"> {{$mhs->prodi}} </td>
                <td scope="row">
                    <a href="" class="badge text-decoration-none text-bg-primary">Edit</a>
                    <a href="" class="badge text-decoration-none text-bg-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
