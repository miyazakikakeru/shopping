@extends('home.userLayouts.layout')
@section('content')
@php
<<<<<<< HEAD
$User =App\Models\User::where('mail_address',Session::get('mail_address'))->first();
@endphp
<h1>ユーザープロフィール</h1>
<h4>
    ユーザー名:{{$User->name}}
=======
$User = App\Models\User::where('mail_address',Session::get('mail_address'))->first();
@endphp
<h1>ユーザープロフィール</h1>
<h4>
    ユーザー名　　:{{$User->name}}
>>>>>>> 05bcff3a39cb63530fbb193a52b970477dc0a8b0
    <a href="/UserProfile/NewName"class="btn btn-primary">ユーザー名の変更</a>
</h4>
<h4>
    メールアドレス：{{$User->mail_address}}
</h4>
<h4>
    パスワード:{{$User->password}}
    <a href="/UserProfile/NewPassword"class="btn btn-primary">パスワードの変更</a>
</h4>
@endsection