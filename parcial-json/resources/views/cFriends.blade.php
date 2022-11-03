<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$customer->name}}</h1>
    <h2>Friends:</h2>
    @foreach($customer->friends as $friend)
        <h6>{{$friend->name}}</h6>
    @endforeach
</body>
</html>