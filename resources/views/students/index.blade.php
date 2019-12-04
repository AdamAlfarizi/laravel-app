@extends('template/main')

@section('title','Daptar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-6">
			<h1 class="mt-3"> Daptar Mahasiswa</h1>
			<a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
			<ul class="list-group">
				@if (session('status'))
				<div class="alert alert-success">
					{{ session('status')}}
				</div>
				@endif

				
				@foreach($students as $student)
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    {{ $student->nama}}
			    <a href="/students/{{ $student->id }}" class="badge badge-info">detai</a>
			  </li>
			  @endforeach
			</ul>
		</div>
	</div>
</div>

@endsection