<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<form method="get">
    <input type="text" name="q" placeholder="Tìm kiếm"/>
    <button>Submit</button>
</form>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>
    </thead>

    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>
                @if($user->userInfo)
                    {{$user->userInfo->phone}}
                @endif
            </td>
            <td>
                @if($user->userInfo)
                    {{$user->userInfo->address}}
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Name</th>
    </tr>
    </thead>

    <tbody>
    @foreach($userInfos as $userInfo)
        <tr>
            <td>{{$userInfo->id}}</td>
            <td>{{$userInfo->phone}}</td>
            <td>{{$userInfo->address}}</td>
            <td>
                @if($userInfo->user)
                    {{$userInfo->user->name}}
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>
