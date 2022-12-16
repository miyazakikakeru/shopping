@extends('home.userLayouts.layout')
@section('content')
        <h1>ご購入ありがとうございます</h1>
        <p>配送準備が整い次第商品をお送りいたします</p>
        <form action="/home" method="post">
            @csrf
            <button class="btn btn-dark">ホームへ</button>
        </form>
@endsection
