<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body>
        <h1>管理者画面</h1>
        <h2>登録商品一覧</h2>
        <table class="table">
            <thead>
                <th>商品id</th><th>商品名</th><th>商品説明</th>
            </thead>
        @foreach ($items as $item)
            <tbody>
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->explanation}}</th>
                </tr>
            </tbody>
        @endforeach
        </table>
        <h2>商品の登録</h2>
        <form action="insert" method="post">
            @csrf
            <label>商品名　</label></br>
            <input type="text" name="name"></br>
            <label>商品情報</label></br>
            <textarea name="explanation"></textarea></br>
            <input type="submit" value="商品登録">
        </form>
        <h2>商品の削除</h2>
        <form action="delete" method="post">
            @csrf
            <label>商品ID</label></br>
            <input type="text" name="deleteId"></br></br>
            <label>商品名　</label></br>
            <input type="text" name="deleteName"></br>
            <input type="submit" value="商品削除">

        </form>
    </body>
</html>
