<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table style="border: 1px solid;">
    <tr>
    @foreach($customers as $customer)
        <td style="border: 1px solid;"><center><h3>{{$customer->name}}</h3></center></td>
    @endforeach
    </tr>
    <tr>
    @foreach($customers as $customer)
        <td style="border: 1px solid;">{{$customer->age}}</td>
    @endforeach
    </tr>
    <tr>
    @foreach($customers as $customer)
        <td style="border: 1px solid;">{{$customer->gender}}</td>
    @endforeach
    </tr>
    <tr>
    @foreach($customers as $customer)
        <td style="border: 1px solid;">{{$customer->address}}</td>
    @endforeach
    </tr>
    <tr>
    @foreach($customers as $customer)
        <td style="border: 1px solid;">{{$customer->email}}</td>
    @endforeach
    </tr>

</table>
    
</body>
</html>