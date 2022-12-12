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
        @if(!empty(Session::get('ms')))
        <h2 class="text-success">※{{Session::get('ms')}}※※</h2>
        @endif
        <h1>ログイン</h1>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}<br></span>
        @endforeach
        <div class="row">
            <div class="col">
                <form action="/check" method="post">
                    @csrf
                    <div class="row">
                        <label class="col-2 col-form-label" for="id">メールアドレス<span
                                class="badge bg-danger">必須</span></label>
                        <div class="col-10">
                            <input type="text" name="mail_address" id="mail_address" class="form-control"
                                placeholder="mail_address" value="{{ old('mail_address') }}">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-2 col-form-label" for="password">パスワード<span class="badge bg-danger">必須</label>
                        <div class="col-10">
                            <input type="text" name="password" id="password" class="form-control"
                                placeholder="password" value="{{ old('password') }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">ログイン</button>
                </form>
                <form action="/register" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">新規登録はこちら</button>
                </form>
            </div>
        </div>
    </article>
</body>

</html>
