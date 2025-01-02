@extends('layout.main')

@section('title', content: 'Students Laravel 5.8')

@section('container')
<h1 class="mt-3">List of Students</h1>

<a href="/students/create" class="btn text-bg-primary my-3">Tambah Data Mahasiswa</a>

@if (session('status'))
    <div class="alert alert-success my-2">
        {{ session('status') }}
    </div>
@endif

<ul class="list-group">
    @foreach ($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-start container">
            <div class="ms-2 me-auto">
            {{$student->nama}}
            </div>
            <a href="/students/{{ $student->id }}" class="badge text-decoration-none text-bg-info">details</a>
        </li>
    @endforeach
</ul>

@endsection
