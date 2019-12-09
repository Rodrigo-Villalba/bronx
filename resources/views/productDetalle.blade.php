@extends('master')

@section('content')
<div class="container">
  <h2>Detalle del producto</h2>
    <article class="">
      <img src="/storage/products/{{$productDetail->photos()->get()[0]->image}}" alt="">
      <div class="">
        <p>Otras fotos</p>

        @forelse ($productDetail->photos()->get() as $photo)
          <img style="width:50px" src="/storage/products/{{$photo->image}}" alt="">
        @empty
          <p>No hay fotos disponibles para este producto.</p>
        @endforelse
      
      </div>
      <h3>{{$productDetail->name}}</h3>
      <p>{{$productDetail->description}}</p>
      <p>Precio: {{$productDetail->price}}</p>

      <form role="form" method="post" action="{{action('CartController@store')}}">
        <input hidden name="id" value="{{$productDetail->id}}">
        <input type="number" name="cant" value="1" placeholder="Cantidad" min="1">
        <button class="btn btn-success">Agregar al carrito</buttonart">
        {{csrf_field()}}
      </form>
    </article>
</div>
@endsection
