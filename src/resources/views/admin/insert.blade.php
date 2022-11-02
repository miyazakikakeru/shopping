@extends('admin.adminLayouts.layout')
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
        <input type="submit" value="商品登録">
    </form>
@endsection
