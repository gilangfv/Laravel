@extends('layout/main')

@section('title', 'daftar mahasiswa')

@section('container')

  <div class="container">
    <div class="row">
      <div class="col-10">
    <h1 class="mt-2">Daftar mahasiswa </h1>
    <table class="table">
    	<thead class="thead-dark">
    		<tr>
    			<th scope="col">#</th>
    			<th scope="col">nama</th>
    			<th scope="col">NRP</th>
    			<th scope="col">email</th>
    			<th scope="col">jurusan</th>
    			<th scope="col">aksi</th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr>
    			<th scope="row">1</th>
    			<td>gilang f</td>
    			<td>173040042</td>
    			<td>gil@yahoo</td>
    			<td>IF</td>
    			<td>
    				<a href="" class="badge badge-success">edit</a>
    				<a href="" class="badge badge-danger">delete</a>
    				
    			</td>
    		</tr>
    	</tbody>
    </table>    
      </div>
    </div>
  </div>
    
@endsection