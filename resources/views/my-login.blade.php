<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('do-login')}}" method="post">
    @csrf
    @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Login">
</form>
</body>
</html>
