
@extends('layouts.usuario')

@section('content')
<form class="container">
  <div class="form-group col-md-6">
    <label for="exampleFormControlInput1">Seu Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleFormControlTextarea1">Pedido De Oração:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escreva para nós o seu pedido de oração" rows="5"></textarea>
  </div>
    <div class="col">
        <input class="btn btn-primary" type="submit" value="Enviar">
    </div>
</form>


@endsection