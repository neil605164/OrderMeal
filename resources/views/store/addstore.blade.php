@extends('main.index')
@section('content')
    <script src="js/addstore.js"></script>

    <h3 class="addstore-title">新增店家</h3>
    <form class="addstore-form" action="{{ url('/checkadd') }}" method="POST">
        {{ csrf_field() }}
        <div class="info">
            <span class="title">基本資料 :</span>
            <span class="basic-date basic-name">名稱 ：<input type="text" name="store-name" class="input-name store-name" placeholder="請輸入店家名稱" required><span class="error"></span></span>
            <span class="basic-date basic-intr">簡介 ：<input type="text" name="store-intr" class="input-intr store-intr" placeholder="請輸入店家簡介"></span>
            <span class="basic-date basic-tel">電話 ：<input type="text" name="store-tel" class="input-tel store-tel" placeholder="請輸入店家電話，格式：09xx-xxx-xxx or xx-xxxx-xxxx" required><span class="error"></span></span>
            <span class="basic-date basic-addr">地址 ：<input type="text" name="store-addr" class="input-addr store-addr" placeholder="請輸入店家地址" required><span class="error"></span></span>
        </div>

        <div class="info">
            <span class="title menu-title">產品設定 :</span>
            <span class="menu-data menu-name">名稱 ：<input type="text" class="food-name" placeholder="請輸入產品名稱"></span>
            <span class="menu-data menu-size">份量 ：
                <select class="food-size" name="food-size">
                    <option value="" selected>---</option>
                    <option value="L">大</option>
                    <option value="M">中</option>
                    <option value="S">小</option>
                </select>
            </span>
            <span class="menu-data menu-sweet">糖份 ：
                <select class="food-sugar" name="food-sugar">
                    <option value="" selected>---</option>
                    <option value="Ws">全糖</option>
                    <option value="Hs">半糖</option>
                    <option value="Ms">微糖</option>
                    <option value="Fs">無糖</option>
                </select>
            </span>
            <span class="menu-data menu-ice">冰量 ：
                <select class="food-ice" name="food-ice">
                    <option value="" selected>---</option>
                    <option value="Wi">正常</option>
                    <option value="Hi">少冰</option>
                    <option value="Mi">微冰</option>
                    <option value="Fi">去冰</option>
                </select>
            </span>
            <span class="menu-data menu-price">價格 ：<input type="text" class="food-price" placeholder="請輸入產品價格"></span>
            <span class="menu-data"><a href="#" class="add-item" title="新增一筆"></a></span>
        </div>

        <div class="info">
            <span class="title">其他資料 :</span>
            <span class="basic-date">評論備註 ：<input type="text" class="input-name" placeholder="請輸入店家評論"></span>
            <span class="basic-date">店家網址 ：<input type="text" class="input-intr" placeholder="請輸入店家網址"></span>
        </div>

        <div class="info">
            <input type="submit" class="addstore-btn" value="送出">
        </div>
    </form>
@endsection
