@extends('admin.adminLayouts.layout')
@section('3','active')
@section('content')
    <h2>商品の削除</h2>
    <form action="del" method="post">
        @csrf
        <label>商品ID</label></br>
        <input type="text" name="deleteId"></br></br>
        <label>商品名　</label></br>
        <input type="text" name="deleteName"></br>
        <input type="submit" value="商品削除">
    </form>
@endsection

