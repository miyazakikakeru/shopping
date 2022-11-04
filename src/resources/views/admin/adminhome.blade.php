@extends('admin.adminLayouts.layout')
@section('1','active')
@section('content')
<h2>登録商品一覧</h2>
    <table class="table">
        <thead>
            <th>商品id</th><th>商品名</th><th>商品説明</th><th>金額</th>
        </thead>
    @foreach ($items as $item)
        <tbody>
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->explanation}}</th>
                <th>{{$item->price}}</th>

            </tr>
        </tbody>
    @endforeach
    </table>
@endsection