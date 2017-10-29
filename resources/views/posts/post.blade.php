<div class="blog-post">
    <h2 class="blog-post-title>"> {{ $post->title}}</h2>
    <h2 class="blog-post-title"><a href="/posts/{{$post->id}}"><img src="{{ asset('images/'. $post->ExampleImg)}}"/></a>
    </h2>
    <p class="blog-post-meta">

        {{$post->user->name}} on
        {{$post->created_at->toFormattedDateString()}}</p>

   {{$post->body}}
    </div>

