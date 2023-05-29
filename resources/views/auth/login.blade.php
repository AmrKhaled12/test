<!doctype html>
<html lang="en">
<head>

    @section('title')
        Login
    @stop
    @include('layouts.head')
        @section('css')
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
                  crossorigin="anonymous">
        @endsection
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
<form method="post" action="{{route('check')}}">
    @csrf
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
        <div class="col-sm-3">
            <input type="text" class="form-control"  name="username">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-3">
            <input type="password" class="form-control" id="inputPassword3" name="pass">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
    <br><br>
    <a class="btn btn-primary" href="{{route('view_register')}}" role="button">Register</a>
</form>
@include('layouts.main_footer')
</body>
</html>
