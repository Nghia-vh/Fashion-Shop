@extends('layout')
@section('tieude')
Trang Chủ
@endsection
@section('noidung')
@if (session()->has('thongbao'))
<div class="alert alert-info p5 shadow-lg border-2 border border-info m-5 fs-3 text-center">
    <h1>Thông Báo</h1>
    <p>{{Session::get('thongbao')}}</p>
</div>

@endif

@endsection
