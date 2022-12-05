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
    <h1>商品詳細ページ</h1>
    <h2>{{ $inputs->name }}</h2>
    <p class="p1">{{ $inputs->explanation }}</p>
    <p class="p3">{{ $inputs->gender }}</p>
    <p class="p4">{{ $inputs->condition }}</p>
    <p class="p2">¥{{ $inputs->price }}</p>
    <form action="/home/confirm" method="post">
        @csrf
        <input type="hidden" name='id' value='{{$inputs->id}}'>
        <button class="btn btn-danger">購入確定</button>
    </form>
    <form action="/home" method="post">
        @csrf
        <button class="btn btn-primary">戻る</button>
    </form>
</body>
