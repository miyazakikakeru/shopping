@extends('home.userLayouts.layout')
@section('content')
@php
$User = App\Models\User::where('mail_address',Session::get('mail_address'))->first();
@endphp
<h1>ユーザープロフィール</h1>
<h4>
    ユーザー名　　:{{$User->name}}
    <a href="/UserProfile/NewName"class="btn btn-secondary">ユーザー名の変更</a>
</h4>
<h4>
    メールアドレス：{{$User->mail_address}}
</h4>
<h4>
    パスワード　　:{{$User->password}}
    <a href="/UserProfile/NewPassword"class="btn btn-secondary">パスワードの変更</a>
</h4>
<form action="/delUser" method="post">
    @csrf
    <button type="submit" class="btn btn-danger">ユーザーアカウントを削除する</button>
</form>
@endsection