@extends('main.index')
@section('content')
    <h3 class="addstore-title">新增店家</h3>
    <form class="addstore-form" action="" method="post">
        {{ csrf_field() }}
        <div class="basic-info">
            <span class="basic-title">基本資料 :</span>

        </div>
    </form>
@endsection
