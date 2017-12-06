  @extends('layouts.app')
  @extends('layouts.navbar')
  @section('content')
    


    <!-- Page Content -->
    <div class="container">
 <h1> TOURS </h1>
      <div class="row">

         
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="/storage/img/page.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/storage/img/slider.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/storage/img/Hawaii1_Web72DPI_crop.jpg" alt="Third slide">
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

          <div class="row">
          @if(count($tours) > 0)
            @foreach ($tours as $tour)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/tours/{{$tour->tour_id}}"><img class="card-img-top" src="/storage/img/cover_images/{{$tour->cover_image}}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/tours/{{$tour->tour_id}}">{{$tour->fp_title}}</a>
                  </h4>
                  <h5>{{$tour->fp_adult_price}} US$</h5>
                  <p class="card-text">{{$tour->fp_short_description}}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            @endforeach
          @endif      


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 @endsection


