  @extends('layouts.app')
  @extends('layouts.navbar')
  @section('content')
    

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Explora el mundo con alguno de nuestros tours</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            
                  <button class="btn btn-block btn-lg"><a class="nav-link" href="/tours">Explore</a></button>
            
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Accesible desde todos los dispositivos</h3>
              <p class="lead mb-0">Una Aplicacion Repsonsive, para poder ver desde celulares y computadoras!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Diseño comodo para el usuario</h3>
              <p class="lead mb-0">Porque sabemos que no se debe ser un genio para comprar</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Uso Facil</h3>
              <p class="lead mb-0">Hasta tu abuela puede navegar aqui!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/tour1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Conoce el Mundo</h2>
            <p class="lead mb-0">Planea las vacaiones que siempre soñaste!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/tour2.jpeg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Vende tus propios Tourss</h2>
            <p class="lead mb-0">Te permitimos ser un agente de ventas de tour, Felicidades! :D</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/tour3.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Soporte tecnico</h2>
            <p class="lead mb-0">Si de causalidad tiene problemas, contactanos</p>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
           <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            
                  <button class="btn btn-block btn-lg"><a class="nav-link" href="/tours">Explore</a></button>
            
          </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

@endsection