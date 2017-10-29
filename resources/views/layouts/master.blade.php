
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
</head>

<body>

@include('layouts.nav')

@if($flash=session('message'))
<div id="flash-message" class="alert alert-success"  role="alert">
    {{$flash}}
</div>
@endif

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Blog</h1>
        <p class="lead blog-description">Test task</p>
    </div>
</div>

<div class="container">

    <div class="row">

        @yield('content')

        @include('layouts.sidebar')
    </div>

</div>

        @include('layouts.footer')

</body>
</html>