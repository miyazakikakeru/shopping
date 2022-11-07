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
                <form action="/home" method="post">
                    @csrf
                    <div class="row">
                        <label class="col-2 col-form-label" for="mail_address">メールアドレス<span
                                class="badge bg-danger">必須</span></label>
                        <div class="col-10">
                            {{ $mail_address }}
                            <input type="hidden" class="form-control" readonly id="mail_address" name="mail_address"
                                value="{{ $mail_address }}">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-2 col-form-label" for="password">パスワード<span
                                class="badge bg-danger">必須</span></label>
                        <div class="col-10">
                            {{ $password }}
                            <input type="hidden" class="form-control" readonly id="password" name="password"
                                value="{{ $password }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">送信</button>
                </form>
                <form method="GET" action="/">
                    <button type="submit" class="btn btn-primary">戻る</button>
                </form>
</body>

</html>
