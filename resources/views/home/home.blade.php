<!doctype html>
<html lang="en">
<head>
    @section('title')
        Home
    @endsection

    @include('layouts.head')
</head>
<body>
@include('layouts.main_header')

    <div class="title m-b-md">
        Video Viewers:({{$video->views}})
    </div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/7KrOzHNvhEQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@include('layouts.main_footer')
</body>
</html>
