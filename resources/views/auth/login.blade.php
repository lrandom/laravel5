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
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
    @csrf
    <label for="" style="display: block">
        <input type="text" name="username" placeholder="username" value="{{old('username')}}">
        {{--     @if($errors->has('username'))
                 <p style="color:red">
                     {{$errors->first('username')}}
                 </p>
             @endif--}}

        @error('username')
        <p style="color:red">
            {{$message}}
        </p>
        @enderror

    </label>

    <label for="" style="display: block">
        <input type="password" name="password" placeholder="password" value="{{old('password')}}">
        {{--   @if($errors->has('password'))
               <p style="color:red">
                   {{$errors->first('password')}}
               </p>
           @endif--}}

        @error('password')
        <p style="color:red">
            {{$message}}
        </p>
        @enderror
    </label>

    <button type="submit">Login</button>
</form>
</body>
</html>
