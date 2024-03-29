<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta charset="utf-8">


    <title></title>
  </head>
  <body>
   <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img id="comp-jadduam9imgimage" style="object-position: 50% 50%; width: 195px; height: 54px; object-fit: cover;" alt="" data-type="image" itemprop="image"
          src="https://static.wixstatic.com/media/36efdc_5a49fbf9400e46bcaa1f89c065243e3b~mv2.png/v1/fill/w_390,h_108,al_c,q_80,usm_0.66_1.00_0.01/36efdc_5a49fbf9400e46bcaa1f89c065243e3b~mv2.webp">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
           @auth
            <form id='logout-form' action="{{ route('logout')}}" method='POST' style='display: none;'>
              @csrf
            </form>
            @if (auth()->check() && Auth::user()->rol == 1)
            <li class = "nav-item">
              <a href="/admin" class="nav-link">Administrador</a>
            </li>
            @endif
            @endauth
            <li class="nav-item">
              <a class="nav-link" href="/productos">Productos</a>
            </li>

            <li class="form-horizontal">
              <form id="search" method="GET" action="{{action('ProductController@searchProducts')}}" >
                <input name="nombre" type="text" placeholder="      Buscar productos" />
                <button type="submit" id="submitButton" class="btn btn-primary" style="margin-top:10px;margin-left:50px;">Buscar</button>
              </form>
              <!-- <a href="/admin" class="nav-link">Administrador</a> -->
            </li>

            @auth
            <li class = "nav-item">
              <a href="/history" class="nav-link" style="
    margin-left: 30px;
">  Mis compras</a>
            </li>

            <li class="navbar-text">
              <p style="margin-left:160px" class="bienvenido">Bienvenido <span> {{ Auth::user()->name }}</p>
            </li>
            <li style="margin-left:5px" class = "nav-item">
              <a href="/cart" class="nav-link">Carrito</a>
            </li>

            <li>
              <a  class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Log Out</a>
            </li>
          @endauth
          @guest
            <li style="margin-left:400px" class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            </li>
          @endguest
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endguest
          </ul>
        </div>
      </nav>

      <div class="cuadrado">


@yield ("content")

        <!-- hasta aca van los productos-->

        <!-- Footer -->

        <footer class="page-footer font-small stylish-color-dark pt-4">
          <!-- Footer Links -->
          <div class="container text-center">

            <!-- Grid row -->
            <div class="">

              <!-- Grid column -->
              <div class="">

                <div class="">
                  <h5 class="font-weight-bold text-uppercase mt-3 mb-4">WELCOME TO THE BRONX</h5>
                </div>
                <div class="row col-12">
                  <div class="col-4">
                    <p>Somos un emprendimiento de muebles y objetos de decoración. Realizamos todos nuestros productos de forma artesanal alrededor de la nobleza y durabilidad del hierro. Nuestro objetivo es combinar diseño, funcionalidad, minimalismo,
                      robustez y durabilidad.
                      Eso es Bronx!</p>
                  </div>
                  <div class="col-4">
                    <ul class="text-uppercase">
                      <li>
                        <strong>
                          <p href="#!">Contacto</p>
                        </strong>
                      </li>
                      <li>
                        <a href="#!"></a>
                      </li>
                      <li>
                        <p>Estomba 2887, Coghlan</p>
                      </li>
                      <li>
                        <p>Buenos Aires, Argentina</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-4">

                    <ul class="text-uppercase mt-3 mb-4">
                      <li>
                        <p>Mie-Sab 15 a 20</p>
                      </li>
                      <li>
                        <p>Tel 1165075229</p>
                      </li>
                      <li>
                        <p>hola@broxdecor.com.<br>ar</p>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
              <!-- Grid column -->

              <hr class="clearfix w-100 d-md-none">

              <!-- Grid column -->
              <div class="">
                <!-- Links -->
              </div>
              <!-- Grid column -->
              <hr class="clearfix w-100 d-md-none">
              <!-- Grid column -->
              <div class="">

              </div>
              <!-- Grid column -->
              <hr class="clearfix w-100 d-md-none">

            </div>
            <!-- Grid row -->
          </div>
          <!-- Footer Links -->
        </footer>
        <div class="">
          <ul class="social-media">
            <li><a href="https://www.facebook.com/bronxdecor/"><span class="ion-social-facebook"></span></a></li>
            <li><a href="https://twitter.com/"><span class="ion-social-twitter"></span></a></li>
            <li><a href="https://www.instagram.com/bronx_decor/?fbclid=IwAR0r3GClcPc-rxjnVWyIJIoRUqS5-Wtm55F9g06ZytY2Id3fkPCc1BJhQRc"><span class="ion-social-instagram"></span></a></li>
          </ul>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </div>
  </body>
</html>
