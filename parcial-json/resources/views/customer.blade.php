<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @dump($customer)
    <h1>{{$customer->name}}</h1>
    <h4>Gender: {{$customer->gender}}, age: {{$customer->age}}</h4>
    <h3>Email: {{$customer->email}}</h3>
    <h6>Address: {{$customer->address}}</h6>
    
</body>
</html>