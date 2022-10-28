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
        <h1>お問い合わせフォーム</h1>
        <div class="row">
            <div class="col">
        <form action="/" method="post">
            @csrf
            <div class="row">
                <label class="col-2 col-form-label" for="name">氏名<span class="badge bg-danger">必須</span></label>
                <div class="col-10">
                    <input type="text" name="name" id="name" class="form-control" placeholder="氏名" value="{{old('name')}}">
                        @if ($errors->first('name'))
                            @foreach($errors->get('name') as $message)
                                <p class="text-danger">※{{ $message }}</p>
                            @endforeach
                        @endif 
                </div>
            </div>

            <div class="row">
                <label class="col-2 col-form-label" for="name_kana">氏名（カナ）</label>
                <div class="col-10">
                    <input type="text" name="name_kana" id="name_kana" class="form-control" placeholder="氏名（カナ)">
                </div>
            </div>
            
            <div class="row">
             <label class="col-2 col-form-label" for="mail">メールアドレス<span class="badge bg-danger">必須</span></label>
             <div class="col-10">
                 <input type="mail" name="mail" id="mail" class="form-control" placeholder="メールアドレス" value="{{old('mail')}}">
                    @if ($errors->first('mail'))
                        @foreach($errors->get('mail') as $message)
                            <p class="text-danger">※{{ $message }}</p>
                        @endforeach
                    @endif 
             </div>
            </div>

            <div class="row">
             <label class="col-2 col-form-label" for="mail_confirmation">メールアドレス確認用<span class="badge bg-danger">必須</span></label>
             <div class="col-10">
                <input type="mail" name="mail_confirmation" id="mail_confirmation" class="form-control" placeholder="メールアドレス確認用" value="{{old('mail_confirmation')}}">
                    @if ($errors->first('mail_confirmation'))
                        @foreach($errors->get('mail_confirmation') as $message)
                            <p class="text-danger">※{{ $message }}</p>
                        @endforeach
                    @endif
             </div>
            </div>

            <div class="row">
             <label class="col-2 col-form-label" for="banngou">電話番号</label>
             <div class="col-10">
                <input type="banngou"name="banngou" id="banngou" class="form-control" placeholder="電話番号">
             </div>
            </div>
            
            <div class="row">
                  <label class="col-2 col-form-label" for="naiyou">お問い合わせ内容<span class="badge bg-danger">必須</span></label>
                  <div class="col-10">
                     <input type="text" name="naiyou" id="naiyou" class="form-control" placeholder="お問い合わせ内容" value="{{old('naiyou')}}">
                        @if ($errors->first('naiyou'))
                            @foreach($errors->get('naiyou') as $message)
                                <p class="text-danger">※{{ $message }}</p>
                            @endforeach
                        @endif
                  </div>
            </div>
              <button type="submit" class="btn btn-primary">送信</button>
            </form>
    </body>
</html>
