<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Home Page')</title>
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Login</a></li>
        </ul>
    </nav>

    <!--Đoạn nội dung sẽ được ghi đè bởi giao diện con-->
    <div>
        @section('content')
            <p>Đây là nội dung mặc định</p>
        @show
    </div>

    <footer>
        <p>Footer Copyright 2023 NIIT</p>
    </footer>
</div>
</body>
</html>
