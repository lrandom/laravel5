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
<h1>Post</h1>
@foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <p>tags</p>
    <div>
        @foreach($post->tags as $tag)
            <p>{{$tag->name}}</p>
        @endforeach
    </div>
@endforeach

<h1>Product</h1>
@foreach($products as $product)
    <h2>{{$product->name}}</h2>
    <p>tags</p>
    <div>
        @foreach($product->tags as $tag)
            <p>{{$tag->name}}</p>
        @endforeach
    </div>
@endforeach
</body>
</html>
