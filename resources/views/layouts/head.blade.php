<title>@yield('title')</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--هنا يستحسن احط ملفات ال css بتاعت الهيدر و الفوتر--}}
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('css/materialize.min.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('css/tooplate.css')}}">
@yield('css')
