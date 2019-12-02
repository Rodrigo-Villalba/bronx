@extends('master')

@section('content')
<div class="container">
  <h2>Mis carritos</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Status</th>
          <th scope="col">Descripción</th>
          <th scope="col">SubTotal</th>
          <th scope="col">Descuento</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($carts as $cart)
          <tr>
            <td>
            @if($cart->status == 0)
              <span>CERRADO</span>
            @else
              <span>ABIERTO</span>
            @endif
            </td>
            <td>{{$cart->product_id}}</td>
            <td>{{$cart->sub_total}}</td>
            <td>{{$cart->discount}}</td>
            <td>{{$cart->total}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
