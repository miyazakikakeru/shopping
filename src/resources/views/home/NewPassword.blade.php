@extends('home.userLayouts.layout')
@section('content')
        <h1>パスワードの変更を行います</h1>
        <form action="/UserProfile/NewPassword" method="post">
                @csrf
                <div class="col-4">
                        <input type="text" name="password" id="password" class="form-control" placeholder="password">
                        <button type="submit" class="btn btn-dark">変更</button>
                </div>
        </form>
@endsection
