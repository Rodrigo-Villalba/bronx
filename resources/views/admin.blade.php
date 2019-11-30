@extends('master')

@section('content')
<div class="container">
  <h2>Panel Admin</h2>

  <button class="btn btn-success" onclick="window.location='{{ url("formularioCarga") }}'">Agregar producto</button>

  <br />
  <br />

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Categoria</th>
        <th scope="col">Precio</th>
        <th scope="col">Stock</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->categoria->nombre}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->stock}}</td>
          <td>
              <a style="margin-left:100px" href="{{ url('/productos/' . $product->id) }}" class="btn btn-xs btn-info pull-right">Ver producto</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
