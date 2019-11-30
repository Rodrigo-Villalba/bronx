@extends('master')

@section('content')

<br>
<br>

<form method="POST" action="{{action('ProductController@create')}}" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="description">Descripcion</label>
    <input type="text" class="form-control" name="description" placeholder="Descripcion">
  </div>
  <div class="form-group">
    <label for="category">Categoria</label>
    <select class="form-control" name="category">
      <option>Elija una categoria</option>
      @foreach ($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="price">Precio</label>
    <input type="number" class="form-control" name="price" placeholder="Precio">
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="number" class="form-control" name="stock" placeholder="Stock">
  </div>
  <div class="form-group">
    <label for="imagen1">Imagen 1</label>
    <input type="file" class="form-control-file" name="imagen1">
  </div>
  <div class="form-group">
    <label for="imagen2">Imagen 2</label>
    <input type="file" class="form-control-file" name="imagen2">
  </div>
  <div class="form-group">
    <label for="imagen3">Imagen 3</label>
    <input type="file" class="form-control-file" name="imagen3">
  </div>
  <div class="form-group">
    <label for="imagen4">Imagen 4</label>
    <input type="file" class="form-control-file" id="imagen4">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  {{csrf_field()}}
</form>

@endsection
