@extends('layouts.master')
  			
@section('content')
  		
  		<div class="col-md-8 blog-main">
  			<h2>Sign In</h2>

  			<form method="POST" action="/login">

			{{ csrf_field()}}

			  <div class="form-group">
			    <label for="email">Email Address:</label>
			    <input type="email" class="form-control" id="email" name="email" required>
			  </div>

			  <div class="form-group">
			    <label for="password">Password:</label>
			    <input type="password" class="form-control" id="password" name="password" required>
			  </div>

			   <div class="form-group">
			  		<button type="submit" class="btn btn-primary">Sign In</button>
				</div>

				<div class="form-group">
					@include ('layouts.errors')
				</div>
			</form>
  		</div>
  		

@endsection