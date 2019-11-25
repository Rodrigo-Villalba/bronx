@extends('master')

@section('content')
<div class="container">
  <h2>Panel Admin</h2>

  <p>hola administradores</p>

 <button class = "dropdown-quantity-item selected" name="button">Agregar Producto</button>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">descriptions</th>
      <th scope="col">price</th>
      <th scope="col">featured_img</th>
      <th scope="col">stock</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sillon</td>
      <td>sillon</td>
      <td>$5000</td>
      <td>
        <img src="\storage\products\sillon.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
      <th scope="row">2</th>
      <td>Mesa</td>
      <td>mesa hierro</td>
      <td>$3000</td>
      <td>
      <img src="\storage\products\eva.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mesita Rocks</td>
      <td>mesa ratona rocks</td>
      <td>$2000</td>
      <td>
      <img src="\storage\products\rocks2.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
      <img src="\storage\products\fondo1.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
      <img src="\storage\products\fondo2.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
      <img src="\storage\products\fondo3.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
      <img src="\storage\products\fondo4.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
      <img src="\storage\products\tolixcopia2.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td></td>
      <td>
      <img src="\storage\products\zetaperfo.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
      <img src="\storage\products\trianglemini.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td></td>
      <td>
      <img src="\storage\products\DSC02168.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
      <img src="\storage\products\DSC02174.jpg" width="50">
      </td>
      <td>
        <input name="qty" id="qty" maxlength="12" value="1" title="Cantidad" class="input-text qty" type="text">
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Editar</button>
      </td>
      <td>
       <button class = "dropdown-quantity-item selected" name="button">Borrar</button>
      </td>
    </tr>

  </tbody>
</table>

</div>
@endsection
