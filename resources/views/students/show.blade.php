@extends('layout.main')

@section('title', content: 'Students Detail 5.8')

@section('container')
<div class="container">
    <h1 class="mt-3">Detail of Students</h1>
    
    <div class="card" style="width: 22rem;">
      <div class="card-body ">
        <h5 class="card-title">{{$student->nama}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{$student->nim}}</h6>
        <p class="card-text">{{$student->email}}</p>
        <p class="card-text">{{$student->prodi}}</p>
    
        <a class="btn text-bg-primary" href="/students/{{$student->id}}/edit">Edit</a>
        <form action="{{$student->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn text-bg-danger" type="submit" onclick="return confirm('Yakin?');">Delete</button>
        </form>
        <a href="/students" class="card-link">Kembali</a>
      </div>
    </div>
</div>

@endsection
