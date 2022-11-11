@extends('admin.adminLayouts.layout')
@section('1','active')
@section('content')
<h2>登録商品一覧</h2>
    <table class="table">
        <thead>
            <th>商品id</th><th>商品名</th><th>商品説明</th><th>金額</th><th>性別</th><th>商品状態</th>
        </thead>
    @foreach ($products as $item)
        <tbody>
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->explanation}}</th>
                <th>{{$item->price}}</th>
                <th>{{$item->gender}}</th>
                <th>{{$item->condition}}</th>
            </tr>
        </tbody>
    @endforeach
    </table>
    <h2>管理者一覧</h2>
    <table class="table">
        <thead>
            <th>管理者ID</th><th>管理者名</th><th>パスワード</th>
        </thead>
    @foreach ($admins as $item)
        <tbody>
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->password}}</th>
            </tr>
        </tbody>
    @endforeach
    </table>
</table>
<h2>管理者一覧</h2>
<table class="table">
    <thead>
        <th>管理者ID</th><th>管理者名</th><th>パスワード</th>
    </thead>
@foreach ($Users as $item)
    <tbody>
        <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->name}}</th>
            <th>{{$item->password}}</th>
        </tr>
    </tbody>
@endforeach
</table>
@endsection