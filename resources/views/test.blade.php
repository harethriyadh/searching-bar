@extends('layouts.app')

@section('content')

	

	

        <div class="container" >
  
		                
 
		    		<form class="row g-3" action="" method="POST">

		    			@csrf
						  
						<input type="radio" value="5" name="name">
						<input type="radio" value="0" name="name">
						<input type="radio" value="10" name="name">
						<input type="text" name="lastName">
						<input type="text" name="age">
						<input type="text" name="toll">
						   
						<input type="submit" name="submit">   
						   
					</form>
	  	</div>

@endsection