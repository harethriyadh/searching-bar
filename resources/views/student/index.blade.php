@extends('student.layout')

@section('content')

	@if( $message = Session::get('success') )

		<div class="alert alert-primary container" role="alert">
		  {{$message}}
		</div>	

	@endif

	<div class="jumbotron container">
	  <h1 class="display-4">Hello, world!</h1>
	  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

	  <table class="table table-dark">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">First</th>
	      <th scope="col">Last</th>
	      <th scope="col">Handle</th>
	      <th scope="col">others</th>
	    </tr>
	  </thead>
	  <tbody>

	    @php
	    	$i = 0 ; 
	    @endphp

	    @foreach($student as $item)
	    	<tr>
		      <th scope="row">{{++$i}}</th>
		      <td>{{$item -> name}}</td>
		      <td>{{$item -> age}}</td>
		      <td>{{$item -> toll}}</td>
		      <td>


		      	<div class="row">
				    <div class="col-sm">
				      <a class="btn btn-success"  href="{{route('student.edit',$item->id)}}">Edit</a>
				    </div>
				    <div class="col-sm">
				      <a class="btn btn-success"  href="{{route('student.show',$item->id)}}">show</a>
				    </div>
				    <div class="col-sm">
				      <a class="btn btn-success"  href="{{route('student.create',$item->id)}}">show</a>
				    </div>
				    <div class="col-sm">
				      <form action="{{route('student.destroy',$item->id)}}">
			      		@csrf
			      		@method('DELETE')
			      		<button type="submit" class="btn btn-danger" >Delete</button>
		      		</form>
				    </div>
			  	</div>
		      	
		      	
		      	
		      </td>
		    </tr>
	    @endforeach
	     
	  </tbody>
	</table>

	<div class="m-auto" style="margin: auto;">

		{{ $student -> links() }}

	</div>


@endsection