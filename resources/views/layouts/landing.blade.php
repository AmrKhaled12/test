<!DOCTYPE html>
<html lang="en">

<head>


{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">--}}


@section('title')
        Facebook
    @endsection

@include('layouts.head')
</head>

<body id="home">
@include('layouts.main_header')

<div class="container tm-home-mt tm-home-container">
    <div class="row">
        <div class="col-12">
            <div class="tm-home-left">
                <h1 class="tm-site-title">Facebook</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="tm-home-left mt-3 font-weight-light">
                <p class="tm-mb-35">This is a free <a href="http://www.tooplate.com/view/2105-input">HTML Form Package</a> provided by Tooplate. Five different input forms included.</p>
                <p class="tm-mb-35">Feel free to modify and use any form design. Please share it to your friends.</p>
                <p>Thank you!</p>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <ul class="list-group tm-home-list tm-bg-black font-weight-light">
                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('view_register')}}" class="tm-white-text">01. Register</a>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('login')}}" class="tm-white-text">02. Login</a>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('delete')}}" class="tm-white-text">03. Delete_all</a>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('show')}}" class="tm-white-text">04. Show_all</a>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('ShowPosts')}}" class="tm-white-text">05. Posts</a>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('get')}}" class="tm-white-text">06. show_video</a>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('one')}}" class="tm-white-text">07. one_to_one</a>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('onemany')}}" class="tm-white-text">08. one_to_many</a>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <a href="{{route('many')}}" class="tm-white-text">09. many_to_many</a>
                </li>


            </ul>
        </div>
    </div>
</div>
 @include('layouts.main_footer')
</body>

</html>
