<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel 訂便當系統</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/addstore.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
	<!-- <script src="js/addstore.js"></script> -->
	<script src="js/register.js"></script>
</head>
<body>
    <div class="wrap">
    	<div class="header">
    		<div class="header-nav">
				<div class="header-nav-left">
					<ul class="header-menu">
						<li><a href="{{ url('/') }}" class="header-home-icon" title="首頁"></a></li>
						<!-- <li><a href="#" class="header-meal-icon" title="訂餐"></a></li> -->
						<li><a href="{{ url('/addstore') }}" class="header-add-icon" title="新增店家"></a></li>
						<li><a href="{{ url('/editstore') }}" class="header-edit-icon" title="管理店家"></a></li>
					</ul>
				</div>
				<div class="header-nav-right">
					<input type="text" class="keyword-find" placeholder="關鍵字...">
					<ul class="header-find">
						<li><a href="#" class="header-search-icon" title="搜尋"></a></li>
						<!-- 如果沒有登入 -->
						@if(!Auth::check()){
							<li><a href="{{ url('/register') }}" class="header-register-icon" title="註冊"></a></li>
						}
						@else if{
							<li><a href="{{ url('/logout') }}" class="header-door-icon" title="登出"></a></li>
						}@endif
					</ul>
				</div>
    		</div>
    	</div>
		<div class="content">
			@yield('content')
		</div>
    </div>
</body>
</html>
