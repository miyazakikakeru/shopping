@extends('admin.adminLayouts.layout')
@section('1','active')
@section('content')
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
            <th>{{date('Y/n/d/H/i/s',$item->timestamps)}}</th>
        </tr>
    </tbody>
@endforeach
</table>
@endsection