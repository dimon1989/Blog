@extends('layouts.master')
  			
@section('content')
  		
  		<div class="col-md-8 blog-main">
  			<h2>Publish a Posts</h2>

  			<form method="POST" action="/posts">

			{{ csrf_field()}}

			  <div class="form-group">
			    <label for="title">Title:</label>
			    <input type="text" class="form-control" id="title" name="title" >
			  </div>

			  <div class="form-group">
			    <label for="body">Body:</label>
			    <textarea class="form-control" id="body" name="body" ></textarea>
			  </div>	
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			@if ($errors->any())
            	@foreach ($errors->all() as $error)
               		<div class="btn btn-danger">{{ $error }}</div><br>
            	@endforeach
    		@endif
  		</div>
  		

@endsection
