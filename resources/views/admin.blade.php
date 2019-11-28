@extends('master')

@section('content')
<div class="container">
  <h2>Panel Admin</h2>

  <p>hola administradores</p>

 <a href="/formularioCarga" class = "dropdown-quantity-item selected" name="button">Agregar Producto</a><br>

<br>
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
        <img src="\storage\products\sillonfreddy\sillonfreddy.jpg" width="50">
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
      <img src="\storage\products\recibidoreva\eva.jpg" width="50">
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
      <img src="\storage\products\mesarock\mesarock.jpg" width="50">
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
      <th scope="row">4</th>
      <td>Barra pill</td>
      <td>barra de comedor</td>
      <td>$5000</td>
      <td>
      <img src="\storage\products\barrapill\barrapill.jpg" width="50">
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
      <th scope="row">5</th>
      <td>Espejo triangle</td>
      <td>espejo de hierro</td>
      <td>$4500</td>
      <td>
      <img src="\storage\products\espejotriangle\espejotriangle.jpg" width="50">
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
      <th scope="row">6</th>
      <td>Estanteria oval</td>
      <td>estante en forma redonda</td>
      <td>$6000</td>
      <td>
      <img src="\storage\products\estanteriaoval\estanteriaoval.jpg" width="50">
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
      <th scope="row">7</th>
      <td>Llavero mesh</td>
      <td>recibidor de hierro para llaves</td>
      <td>$3500</td>
      <td>
      <img src="\storage\products\llaveromesh\llaveromesh.jpg" width="50">
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
      <th scope="row">8</th>
      <td>Mueble savanna</td>
      <td>mueble de tv</td>
      <td>$5400</td>
      <td>
      <img src="\storage\products\mueblesavanna\mueblesavanna.jpg" width="50">
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
      <th scope="row">9</th>
      <td>Perchero lenny</td>
      <td>perchero de hierro de pie</td>
      <td>$2500</td>
      <td>
      <img src="\storage\products\percherolenny\percherolenny.jpg" width="50">
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
      <th scope="row">10</th>
      <td>Zapatero torre</td>
      <td>zapatero de hierro</td>
      <td>$7600</td>
      <td>
      <img src="\storage\products\zapaterotorre\zapaterotorre.jpg" width="50">
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
