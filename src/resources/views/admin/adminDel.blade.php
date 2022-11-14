@extends('admin.adminLayouts.layout')
@section('5','active')
@section('content')
<h2>管理者削除</h2>
<form action="adminDelete" method="post">
    @csrf
    <label>管理者ID　</label></br>
    <input type="text" name="id"></br>
    <input type="submit" value="管理者を削除する">
</form>
@endsection