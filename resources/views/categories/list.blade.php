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
  <table>
      <thead>
         <tr>
             <th>ID</th>
             <th>Name</th>
         </tr>
      </thead>

      <tbody>
      @foreach($categories as $category)
          <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
          </tr>
      @endforeach
      </tbody>
  </table>
</body>
</html>
