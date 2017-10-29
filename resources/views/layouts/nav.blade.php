<div class="blog-masthead">
    <div class="container">
<nav class="nav blog-nav">
    <a class="nav-link active" href="/">Home/All posts</a>
   
    
   

    @if(Auth::check())
    
    <a class="nav-link active" href="/posts/create">Create a post</a>
    <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
    <a class="nav-link ml-auto" href="/logout">Logout</a>
    @else
    <a class="nav-link active" href="/register">Register</a>
    <a class="nav-link ml-auto" href="/login">Login</a>
        @endif
</nav>
    </div>
</div>