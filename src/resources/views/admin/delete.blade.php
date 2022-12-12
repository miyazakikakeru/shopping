@extends('admin.adminLayouts.layout')
@section('3','active')
@section('content')
<h2>商品の削除</h2>
@foreach($errors->all() as $error)
<span class="text-danger">{{$error}}<br></span>
@endforeach
    <form action="del" method="post">
        @csrf
        <label>商品ID</label></br>
        <input type="text" name="deleteId" value="{{old('deleteId')}}"></br></br>
        <label>商品名　</label></br>
        <input type="text" name="deleteName" value="{{old('deleteName')}}"></br>
        <input type="submit" value="商品削除">
    </form>
@endsection

