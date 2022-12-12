<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
</head>
<body>
<<<<<<< HEAD
=======
@php
$User = App\Models\User::where('mail_address',Session::get('mail_address'))->first();
@endphp
>>>>>>> 05bcff3a39cb63530fbb193a52b970477dc0a8b0
<header style="padding:15px 100px;">
<div style="text-align:right;">
    <form action="/UserProfile" method="post">
        @csrf
        <button type="submit" class="btn btn-outline-primary">
<<<<<<< HEAD
            {{App\Models\User::where('mail_address',Session::get('mail_address'))->first()->value('name')}}さん
=======
            {{$User->name}}さん
>>>>>>> 05bcff3a39cb63530fbb193a52b970477dc0a8b0
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" >
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </button>
    </form>
    <form action="/UserLogout" method="post">
        @csrf
        <button type="sumit"class="btn btn-outline-primary">
            ログアウト
        </button>
    </form>
</div>
</header>

@yield('content')
</body>