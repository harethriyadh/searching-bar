@extends('student.layout')

@section('content')
	

	<div class="card container mt-5" > 
		<div class="card-body" >
			<div class="card-text">Student name: {{ $student->name }}</div>
		</div>
	</div>

	<div class="container" >
 
		  <div class="form-group">
		    <label for="exampleFormControlInput1">{{$student->name}}</label>
		     
		  </div> 
		  <div class="form-group">
		    <label for="exampleFormControlInput1">{{$student->age}}</label>
		     
		  </div> 
		  <div class="form-group">
		    <label for="exampleFormControlInput1">{{$student->toll}}</label>
		     
		  </div>  
	</div>

@endsection