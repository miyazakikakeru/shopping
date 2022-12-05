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
        <h1>商品ホーム</h1>
        <div class="row">
            @foreach ($items as $item)
                <div class="col-4" style="padding:10px;">
                    <div class="card">
                        
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->explanation }}</p>
                                <p class="card-text">{{ $item->gender }}</p>
                                <p class="card-text">{{ $item->condition }}</p>
                                <p class="card-text">¥{{ $item->price }}</p>
                                <form action="/home/detail" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button class="btn btn-danger">購入</button>
                                </form>
                            </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
        <div class="bg-info" style="padding:10px;">
            <form action="/target" method="post">
                @csrf
                <div class="row">
                    <div class="input-group col-3">
                        <input type="text" class="form-control" name="moneyMin" placeholder="最小金額" aria-label="最小金額">
                        <span class="input-group-text">~</span>
                        <input type="text" class="form-control" name="moneyMax" placeholder="最大金額" aria-label="最大金額">
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" class="form-check" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="form-check-input" name="man" value="男" id="btncheck1"
                            autocomplete="off">
                        <label class="form-check-label" for="btncheck1">男</label>
                    </div>
                    <div class="col-1" class="form-check" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="form-check-input" name="girl" value="女" id="btncheck2"
                            autocomplete="off">
                        <label class="form-check-label" for="btncheck2">女</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" class="form-check" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="form-check-input" name="new" value="新品" id="btncheck3"
                            autocomplete="off">
                        <label class="form-check-label" for="btncheck3">新品</label>
                    </div>
                    <div class="col-1" class="form-check" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="form-check-input" name="old" value="中古品"
                            id="btncheck4" autocomplete="off">
                        <label class="form-check-label" for="btncheck4">中古品</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    絞る
                </button>
            </form>
        </div>

    </article>
    
</body>
