@extends('layouts.master')
  			
@section('content')
  		
  		<div class="col-md-8 blog-main">
  			 <h2 class="blog-post-title">
        			{{ $post->title }}
     		</h2>
     		<p>
     		 		{{ $post->body }}
    		</p>

        <div class="comments">
          <ul class="list-group">
            @foreach ($post->comments as $comment)
              <article>
                  <li class="list-group-item">
                      
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}
                    </strong><br>

                    {{ $comment->body }}

                  </li>
              </article>
            @endforeach
          </ul>
        </div>

        <hr>
        <div class="card">
            <div class="card-block">
               
               <form method="POST" action="/posts/{{ $post->id }}/comments">
                 {{ csrf_field()}}
                  <div class="form-group">
                      <textarea class="form-control" id="body" name="body" placeholder="Your comment here." required></textarea>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                  </div>

               </form>

               @include('layouts.errors')

            </div>
        </div>


      </div>

@endsection

  		