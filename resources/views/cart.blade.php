@extends('master')

@section('content')
<div class="container">
  <h2>Mi carrito</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">SubTotal</th>
          <th scope="col">Descuento</th>
          <th scope="col">Total</th>
          <th scope="col">#</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cart->items as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->product->name}}</td>
            <td>{{$item->cant}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->sub_total}}</td>
            <td>{{$item->discount}}</td>
            <td>{{$item->total}}</td>
            <td>
            <form role="form" method="post" name="{{ $item->id }}" id="{{ $item->id }}" action="{{action('CartController@eliminarCarritoItem')}}">
              <input hidden name="id" value="{{$item->id}}">
              <button class="btn btn-danger">X</button>
              {{csrf_field()}}
            </form>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <h1>Total carrito: {{$cart->total}}</h1>

    <form role="form" method="post" action="{{action('CartController@cartclose')}}">
        <input hidden name="id" value="{{$cart->id}}">
        <button class="btn btn-success">Comprar</buttonart">
        {{csrf_field()}}
      </form>
</div>
@endsection
