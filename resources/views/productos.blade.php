@extends('master')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <h2>Listado de productos</h2>
      <section class="">
        @forelse ($products as $product)
          <article class="">
            <img src="/storage/products/{{$product->featured_img}}" alt="">
            {{-- <img src="/storage/products/{{$product->photos()->get()[0]->image}}" alt=""> --}}
            {{-- @dd($product->photos()->get()) --}}
             <div class="">
              <p>Otras fotos</p>
              @forelse ($product->photos()->get() as $photo)
                <img style="width:50px" src="/storage/products/{{$photo->image}}" alt="">
              @empty
                <p>No hay fotos disponibles para este producto.</p>
              @endforelse
            </div>
            <h3>{{$product->name}}</h3>
            <p>{{$product->description}}</p>
            <p>Precio: {{$product->price}}</p>
            <a href="/productos/{{$product->id}}" class="btn btn-success">Ver más</a>
          </article>
        @empty
        <p>No hay productos disponibles.</p>
        @endforelse
      </section>
  </div>

</div>
@endsection




{{-- <h2>Detalle del producto</h2>
<article class="">
  <img src="/storage/products/{{$productDetail->featured_img}}" alt="">
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
  <form class="" action="/addtocart" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$productDetail->id}}">
    <button class="btn btn-success" type="submit">Agregar al carrito</a>
  </form>

</article> --}}
