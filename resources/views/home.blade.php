@extends ("master")

@section ("content")
<!-- LOGO QUE GIRA -->
<div class="logogif img-fluid. max-width: 100%">
          <img id="comp-jyuim62timgimage" style="object-position: 50% 50%; width:400px; height: 400px; object-fit: cover;" alt="giphy.gif" data-type="image" itemprop="image"
            src="https://static.wixstatic.com/media/36efdc_9fea52cf5b7d4d2b9a07f1f6744102ab~mv2.gif">
        </div>
        <!--Carrousel de fotos -->
        <div id="carouselExampleIndicators" class="carousel slide rounded mx-auto d-block" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/storage/products/mueblesavanna/mueblesavanna.jpg" class="d-block w-100" alt="img">
            </div>
            <div class="carousel-item">
              <img src="/storage/products/sillonfreddy/sillonfreddy.jpg" class="d-block w-100" alt="img">
            </div>
            <div class="carousel-item">
              <img src="/storage/products/espejotriangle/espejotriangle.jpg" class="d-block w-100" alt="img">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!-- Fotos decoracion -->

        <div class="banner">
          <img src="/storage/products/mesarock/mesarock4.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="banner">
          <img src="/storage/products/mesarock/mesarock5.jpg" class="img-fluid" alt="Responsive image">
        </div>


        <!--productos venta-->
        <section class="vip-products row">
          <article class="product">
            <div class="photo-container">
              <img class="photo" src="/storage/products/sillonfreddy/sillonfreddy.jpg" alt="pdto 01">
            </div>
            <h2 class="texto">Sillon Freddy</h2>
            <p>Sillón Freddy. Fabricación propia. Elegi medidas, color de base y Medidas: 170 x 85 x 65h cm. Nuestros productos son de fabricación artesanal.
              Pintados con pintura al horno en polvo. Colores disponibles base: Negro y Blanco.Otros colores: Dorado, Cobre Rose, Rosa, Menta, Cielo, Lila, Coral.
              Somos fabricantes! </p>
          </article>

          <article class="product">
            <div class="photo-container">
              <img class="photo" src="/storage/products/recibidoreva/eva.jpg" alt="pdto 02">
            </div>
            <h2 class="texto">Recibidor Eva</h2>
            <p>Recibidor hierro con estante bajo. Medidas: 100 x 28 x 90h cm. Nuestros productos son de fabricación artesanal.
              Pintados con pintura al horno en polvo. Colores disponibles base: Negro y Blanco. Otros colores: Dorado, Cobre Rose, Rosa, Menta, Cielo, Lila, Coral. Somos Fabricantes! </p>
          </article>

          <article class="product">
            <div class="photo-container">
              <img class="photo" src="/storage/products/mesarock/mesarock.jpg" alt="pdto 03">
            </div>
            <h2 class="texto">Mesa Rocks Nido</h2>
            <p>Mesas bajas realizadas en chapa 3 mm. Medidas: 48 x 37 x 40h cm. Nuestros productos son de fabricación artesanal. Pintados con pintura al horno en polvo.
              Colores disponibles base: Negro y Blanco. Otros colores: Dorado, Cobre Rose, Rosa, Menta, Cielo, Lila, Coral. Somos Fabricantes! </p>
          </article>

          <article class="product">
            <div class="photo-container">
              <img class="photo" src="/storage/products/espejotriangle/espejotriangle.jpg" alt="pdto 04">
            </div>
            <h2 class="texto">Espejo Triangle</h2>
            <p>Espejo con marco de planchuela de hierro de 9cm de ancho y 3mm de espesor Medidas 80 x 70 cm. Nuestros productos son de fabricación artesanal. Pintados con pintura al horno en polvo. Colores disponibles base: Negro y Blanco. Otros
              colores: Dorado, Cobre Rose, Rosa, Menta, Cielo, Lila, Coral. Somos Fabricantes! </p>
          </article>
        </section>
@endsection
