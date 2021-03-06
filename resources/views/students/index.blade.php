@extends('layout/main')

@section('title', 'daftar mahasiswa')

@section('container')

  <div class="container">
    <div class="row">
      <div class="col-6">
    <h1 class="mt-2">Daftar mahasiswa </h1>
    <a href="students/create" class="btn btn-primary">tambah mahasiswa</a>
    <ul class="list-group">
    @foreach($students as $student)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{$student->nama}}
    <a href="students/{{$student->id}}" class="badge badge-info">detail</a>
  </li>
  @endforeach
</ul>
      </div>
    </div>
  </div>
    
@endsection