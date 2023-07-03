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
{{$username}}
<br>
{{$address}}

<?php $job = 'developer'; ?>

{{$job}}

<?php echo $job; ?>

@if(isset($notificationError))
    <p>{{$notificationError}}</p>
@else
    <p>Không có lỗi xảy ra</p>
@endif

<?php $age = 18; ?>
@if($age<12)
    <p>Nhi đồng</p>
@elseif($age>12 && $age<18)
    <p>Thiếu niên </p>
@elseif($age>=18 && $age<40)
    <p>Thanh niên</p>
@else
    <p>Trung nien trở lên</p>
@endif

<?php $weather = 'Trời mưa'; ?>
@switch($weather)
    @case('Trời nắng')
       <p>Đi đá bóng</p>
    @break

    @case('Trời mưa')
       <p>Ở nhà ngủ</p>
    @break
@endswitch

</body>
</html>
