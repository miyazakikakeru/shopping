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
        <h1>管理者画面ログイン</h1>
        <form action="/admin/check" method="post">
            @csrf
            <div class="row">
                <label class="col-2 col-form-label" for="id">管理者ID<span class="badge bg-danger">必須</span></label>
                <div class="col-10">
                    <input type="text" name="id" id="id" class="form-control" placeholder="id" value="{{old('id')}}">
                    @if ($errors->first('id'))
                    @foreach($errors->get('id') as $message)
                        <p class="validation">※{{ $message }}</p>
                    @endforeach
                @endif
                </div>
            </div>

            <div class="row">
                <label class="col-2 col-form-label" for="password">パスワード<span class="badge bg-danger" >必須</label>
                <div class="col-10">
                    <input type="text" name="password" id="password" class="form-control" placeholder="password" value="{{old('password')}}">
                    @if ($errors->first('password'))
                        @foreach($errors->get('password') as $message)
                            <p class="validation">※{{ $message }}</p>
                        @endforeach
                    @endif
                </div>
            </div>
            
              <button type="submit" class="btn btn-primary">アクセス</button>
        </form>
    </body>
</html>
