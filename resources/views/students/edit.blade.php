@extends('layout/main')

@section('title', 'daftar mahasiswa')

@section('container')

  <div class="container">
    <div class="row">
      <div class="col-6">
    <h1 class="mt-2">form ubah data mahasiswa </h1>
    <form method="post" action="/students/{{$student->id}}">
    @method('patch')
    @csrf
  <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan nama" name="nama" value="{{$student->nama}}">
  </div>
  <div class="form-group">
    <label for="nrp">nrp</label>
    <input type="text" class="form-control" id="nrp" placeholder="masukan nrp" name="nrp" value="{{$student->nrp}}">
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" placeholder="masukan email" name="email" value="{{$student->email}}">
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" placeholder="masukan jurusan" name="jurusan" value="{{$student->jurusan}}">
  </div>
  <button type="submit" class="btn btn-primary">ubah data</button>
</form>
      </div>
    </div>
  </div>
    
@endsection