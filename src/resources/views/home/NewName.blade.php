@extends('home.userLayouts.layout')
@section('content')
        <h1>ユーザー名の変更を行います</h1>
        <form action="/UserProfile/NewName" method="post">
                @csrf
                <div class="col-4">
                        <input type="text" name="name" id="name" class="form-control" placeholder="name">
                        <button type="submit" class="btn btn-dark">変更</button>
                </div>
        </form>
@endsection
