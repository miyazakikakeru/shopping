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
        <article class="container">
        <h1>お問い合わせフォーム(確認フォーム)</h1>
        <div class="row">
            <div class="col">
        <form action="/comp" method="post">
            @csrf
            <div class="row">
                <label class="col-2 col-form-label" for="name">氏名<span class="badge bg-danger">必須</span></label>
                <div class="col-10">
                    {{ $name }}
                    <input type="hidden" class="form-control" readonly  id="name" name="name" value ="{{ $name }}">
                </div>
            </div>

            <div class="row">
                <label class="col-2 col-form-label" for="name_kana">氏名（カナ）</label>
                <div class="col-10">
                    {{ $name_kana }}
                    <input type="hidden" class="form-control" readonly  id="name_kana" name="name_kana" value ="{{ $name_kana }}">
                </div>
            </div>
            
            <div class="row">
             <label class="col-2 col-form-label" for="mail">メールアドレス<span class="badge bg-danger">必須</span></label>
             <div class="col-10">
                 {{ $mail }}
                 <input type="hidden" class="form-control" readonly  id="mail" name="mail" value ="{{ $mail }}">
             </div>
            </div>

            <div class="row">
             <label class="col-2 col-form-label" for="mail_confirmation">メールアドレス確認用<span class="badge bg-danger">必須</span></label>
             <div class="col-10">
                {{ $mail_confirmation }}
                <input type="hidden" class="form-control" readonly  id="mail_confirmation" name="mail_confirmation" value ="{{ $mail_confirmation }}">
             </div>
            </div>

            <div class="row">
             <label class="col-2 col-form-label" for="banngou">電話番号</label>
             <div class="col-10">
                {{ $banngou }}
                <input type="hidden" class="form-control" readonly  id="banngou " name="banngou " value ="{{ $banngou }}">
             </div>
            </div>
            
            <div class="row">
                  <label class="col-2 col-form-label" for="naiyou">お問い合わせ内容<span class="badge bg-danger">必須</span></label>
                  <div class="col-10">
                     {{ $naiyou }}
                     <input type="hidden" class="form-control" readonly  id="naiyou" name="naiyou" value ="{{ $naiyou }}">
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary">送信</button>
            </form>
            <form method="GET" action="/">
                 <button type= "submit" class="btn btn-primary">戻る</button>
            </form>
    </body>
</html>
