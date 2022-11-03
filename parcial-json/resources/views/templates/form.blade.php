@section('form')
<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nombre">
    <input type="text" name="age" id="age" placeholder="Edad">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="text" name="phone" id="phone" placeholder="Telefono">
    <input type="text" name="address" id="address" placeholder="Direccion">
    <input type="text" name="gender" id="gender" placeholder="genero">
    <input type="submit" value="Enviar">
@show