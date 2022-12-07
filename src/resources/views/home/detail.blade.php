@extends('home.userLayouts.layout')
@section('content')
    <p>商品名：{{ $inputs->name }}</p>
    <p class="p1">商品説明：{{ $inputs->explanation }}</p>
    <p class="p3">性別：{{ $inputs->gender }}</p>
    <p class="p4">商品の状態：{{ $inputs->condition }}</p>
    <p class="p2">商品の金額：¥{{ $inputs->price }}</p>
    <form action="/home/confirm" method="post">
        @csrf
        <input type="hidden" name='id' value='{{$inputs->id}}'>
        <button class="btn btn-danger">購入確定</button>
    </form>
    <form action="/home" method="post">
        @csrf
        <button class="btn btn-primary">戻る</button>
    </form>
@endsection
