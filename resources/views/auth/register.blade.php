<!doctype html>
<html lang="en">
<head>

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
    @endsection
    @section('title')
        Register
    @stop
    @include('layouts.head')
    @section('script')
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                crossorigin="anonymous"></script>
    @stop
    @include('layouts.scripts')

</head>
<body id="home">

@include('layouts.main_header')
{{--    @if(Session::has('key'))--}}
{{--    <div class="alert alert-dark" role="alert">--}}
{{--        {{Session::get('key')}}--}}
{{--    </div>--}}
{{--    @endif--}}
<form action="{{route('insert')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="col-md-4">

      Username<input type="text" class="form-control" name="name" value="{{old('name')}}" class= @error('name') is_invalid @enderror  >
        @error('name')
        <p> {{$message}}</p>
        @enderror
    </div>
    <br><br>
    <div class="col-md-4">
      Email
        <input type="email" class="form-control" name="email" value="{{old('email')}}" class= @error('email') is_invalid @enderror  >
        @error('email')
        <p> {{$message}}</p>
        @enderror

    </div>
    <br><br>
    <div class="col-md-4">

        Password
        <input type="password" class="form-control"  name="password">
    </div>
    <br><br>
    <div class="col-md-4">
        Confirm Password
        <input type="password" class="form-control" >
    </div>
    <br><br>

    ِAdd Photo<input type="file"  name="photo"  class= @error('photo') is_invalid @enderror  >
    @error('photo')
    <p> {{$message}}</p>
    @enderror

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>

    <div class="col-md-4">


    </div>
</form>
@include('layouts.main_footer')
</body>
</html>
