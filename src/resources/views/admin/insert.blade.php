@extends('admin.adminLayouts.layout')
@section('2','active')
@section('content')
    <h2>商品の登録</h2>
    <form action="in" method="post">
        @csrf
        <label>商品ID　</label></br>
        <input type="text" name="id"></br>
        <label>商品名　</label></br>
        <input type="text" name="name"></br>
        <label>商品情報</label></br>
        <textarea name="explanation"></textarea></br>
        <label>金額　　</label></br>
        <input type="text" name="price"></br>
        <label>性別　　</label></br>
        <input type="radio" name="gender" value="男">男性</label>
        <input type="radio" name="gender" value="女">女性</label></br>
        <label>商品の状態　　</label></br>
        <input type="radio" name="condition" value="新品">新品</label>
        <input type="radio" name="condition" value="中古品">中古品</label></br>
        <input type="submit" value="商品登録">
    </form>
@endsection