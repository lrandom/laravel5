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
<form>
    <select name="lang">
        <option value="en_US" <?php if (app()->getLocale() == 'en_US') echo 'selected="selected"'; ?>>English</option>
        <option value="vi" <?php if (app()->getLocale() == 'vi') echo 'selected="selected"'; ?>>Vietnamese</option>
    </select>

    <button>Change</button>
</form>

<p>
    {{__('message.hello')}}
    {{__('message.welcome',['name'=>'Luan'])}}
    {{__('message.bye')}}
    {{__('name')}}
    {{__('my description')}}
</p>

</body>
</html>
