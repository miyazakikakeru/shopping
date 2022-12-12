@extends('admin.adminLayouts.layout')
@section('6','active')
@section('content')
@php
$UserArchive = App\Models\UserArchive::all();
@endphp
<h2>すべての購入履歴</h2>
<table class="table">
    <thead>
        <th>購入者メールアドレス</th><th>商品ID</th><th>購入日時</th>
    </thead>
@foreach ($UserArchive as $item)
    <tbody>
        <tr>
            <th>{{$item->mail_address}}</th>
            <th>{{$item->product_id}}</th>
            <th>{{date("Y年m月d日 H:i:s", strtotime($item->created_at))}}</th>
        </tr>
    </tbody>
@endforeach
</table>
@endsection