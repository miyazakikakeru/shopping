@extends('admin.adminLayouts.layout')
@section('4','active')
@section('content')
<h2>管理者登録</h2>
@foreach($errors->all() as $error)
<span class="text-danger">{{$error}}<br></span>
@endforeach
<form action="adminInsert" method="post">
    @csrf
    <label>管理者ID　</label></br>
    <input type="text" name="id" value="{{old('id')}}"></br>
    <label>パスワード　</label></br>
    <input type="text" name="password"></br>
    <label>管理者名　</label></br>
    <input type="text" name="name" value="{{old('name')}}"></br>
    <input type="submit" value="管理者を登録する">
</form>
@endsection