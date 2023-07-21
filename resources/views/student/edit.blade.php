@extends('student.layout')

@section('content')
	

	<div class="card container mt-5" > 
		<div class="card-body" >
			<div class="card-text">this where you are saposed to onjsdghds</div>
		</div>
	</div>

	<div class="container" >


		<form action="{{route('student.store')}}" method="POST">
			@csrf
			 
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Student name</label>
		    <input type="text" name="name" value="{{$student->name}}" class="form-control" id="exampleFormControlInput1" placeholder="student name">
		  </div> 
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Student age</label>
		    <input type="text" name="age" value="{{$student->age}}" class="form-control" id="exampleFormControlInput1" placeholder="student age">
		  </div> 
		  <div class="form-group">
		    <label for="exampleFormControlInput1">How toll</label>
		    <input type="text" name="toll" value="{{$student->toll}}" class="form-control" id="exampleFormControlInput1" placeholder="student toll">
		  </div> 
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>

@endsection