@extends('main.index')
@section('content')
    <h3 class="addstore-title">新增店家</h3>
    <form class="addstore-form" action="" method="post">
        {{ csrf_field() }}
        <div class="basic-info">
            <span class="basic-title">基本資料 :</span>
            <span class="basic-date">名稱 ：<input type="text" class="input-name" placeholder="請輸入店家名稱"></span>
            <span class="basic-date">簡介 ：<input type="text" class="input-intr" placeholder="請輸入店家簡介"></span>
            <span class="basic-date">電話 ：<input type="text" class="input-tel" placeholder="請輸入店家電話"></span>
            <span class="basic-date">地址 ：<input type="text" class="input-addr" placeholder="請輸入店家地址"></span>
        </div>
    </form>
@endsection
