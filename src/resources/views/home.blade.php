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
    <article class="container">
    <h1>ログイン確認</h1>
    <div class="row">
        <div class="col">
    <form action="/home/search" method="post">
        
            <button type="submit" class="btn btn-primary">送信</button>
        </form>

        <form action="/home/detail" method="post">
            
                <button type="submit" class="btn btn-primary">送信</button>
            </form>
        <form method="GET" action="/">
             <button type= "submit" class="btn btn-primary">戻る</button>
        </form>
</body>