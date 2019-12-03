@extends('master')

@section('content')

  <main>
    <br>
    <br>
  <div class="container contenedor">
      <h2 class = "row justify-content-center">Listado de productos</h2>
      <br>
      <br>
      <section class="row justify-content-center">
     <div class="">
        @forelse ($products as $product)
          <article class="">
          <h3>{{$product->name}}</h3>
            <img src="/storage/products/{{$product->photos()->get()[0]->image}}" alt="">
             <div class="">
              <p>Otras fotos</p>
              @forelse ($product->photos()->get() as $photo)
                <img style="width:50px" src="/storage/products/{{$photo->image}}" alt="">
              @empty
                <p>No hay fotos disponibles para este producto.</p>
              @endforelse
            </div>
            <br>



            <p>{{$product->description}}</p>
            <p>Precio: {{$product->price}}</p>
            <a href="/productos/{{$product->id}}" class="btn btn-success">Ver producto</a>
            <br>
            <br>
            <br>
            <br>
            <br>
          </article>
        @empty
        <p>No hay productos disponibles.</p>
        @endforelse
        <div>
      </main>
      </section>
  </div>

</div>
@endsection
