@extends('template/main')

@section('title','Daptar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-6">
			<h1 class="mt-3"> Daptar Mahasiswa</h1>
			<ul class="list-group">
				@foreach($students as $student)
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    {{ $student->nama}}
			    <a href="" class="badge badge-info">detai</a>
			  </li>
			  @endforeach
			</ul>
		</div>
	</div>
</div>

@endsection