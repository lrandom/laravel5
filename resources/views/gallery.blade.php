<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class=" mx-auto bg-gray-50">
    <div class="w-1/2 mx-auto">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="border border-gray-200 p-2 rounded"/>
            <button class="bg-blue-500 text-white border boder-blue-500  p-2 rounded">Submit</button>
        </form>
    </div>

    <div class="grid grid-cols-4">
        @foreach($photos as $photo)
            <div class="p-2">
                <img src="{{asset($photo->path)}}" alt="" class="w-full h-full object-cover"/>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
