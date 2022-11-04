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
    <h1>商品ホーム</h1>
    <form action="/home" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">
            絞る
        </button>
    </form>
        <div class="container">
        <div class="row">
        @foreach ($items as $item)
            <form action="/home/detail" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="hidden" name="name" value="{{$item->name}}">
            <input type="hidden" name="explanation" value="{{$item->explanation}}">
            <input type="hidden" name="price" value="{{$item->price}}">
            <input type="hidden" name="gender" value="{{$item->gender}}">
            <input type="hidden" name="condition" value="{{$item->condition}}">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">{{$item->name}}</p>
                  <p class="card-text">{{$item->explanation}}</p>
                  <p class="card-text">{{$item->gender}}</p>
                  <p class="card-text">{{$item->condition}}</p>
                  <p class="card-text">¥{{$item->price}}</p>
                  <button class="btn btn-primary">購入</button>
                </div>
              </div>
            </div>
            </form>
        @endforeach
        </div>
        </div>


</body>