@extends('layouts.master')
@section('content')
    <div class="col-sm-8 blog-main">
        <img src="{{ asset('images/'. $post->ExampleImg)}}" height="400" width="800"/>
        <h1> {{$post->title}}</h1>

    @if(count($post->tags))
            <ul>
                @foreach($post->tags as $tag)

                    <li><a href="/posts/tags/{{$tag->name}}">

                        {{$tag->name}}

                    </a>

                    </li>

                    @endforeach
            </ul>
        @endif<br>
        
        <p class="blog-post-meta">Posted by {{$post->user->name}} on 
            {{$post->created_at->toFormattedDateString()}}</p>
        
        {{$post->body}}
        

        <hr>

    <div class="comments">

        <ul class="list-group">

        @foreach($post->comments as $comment)

            <li class="list-group-item">
                <strong>
                  
                    {{ $comment->created_at->diffForHumans() }} :&nbsp;
                </strong>
                
                {{$comment->body}}

            </li>

            @endforeach


        </ul>


    </div>
        
        <hr>

        <div class="card">
            <div class="card-block">
                <form method="POST" action ="/posts/{{$post->id}}/comments">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="SUBMIT" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>

    @endsection