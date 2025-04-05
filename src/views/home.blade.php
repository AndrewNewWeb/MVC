<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$name}}</h1>

    @foreach($colors as $c)
        <li>{{$c}}</li>
    @endforeach
</body>
</html>