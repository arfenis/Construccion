 @extends('layouts.app')
 
  @section('content')

       <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">{{$tour->fp_title}}</h1>
          <div class="list-group">
            <a href="#" class="list-group-item active">Category 1</a>
            @if(!Auth::guest())
              @if(Auth::user()->id == $tour->user_id)
                  <a href="/tours/{{$tour->tour_id}}/edit" class="list-group-item">Edit</a>
              @endif
            @endif
            <a href="#" class="list-group-item">###</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="/storage/img/cover_images/{{$tour->cover_image}}" alt="">
            <div class="card-body">
              <h3 class="card-title">{{$tour->fp_title}}</h3>
              <h4>{{$tour->fp_adult_price}}$</h4>
              <p class="card-text">{!!$tour->fp_description!!}</p>
             
            </div>
          </div>
       

        </div>

      </div>

    </div>
    <!-- /.container -->
    @if(!Auth::guest())
      {!!Form::open(['action' => ['ToursController@destroy', $tour->tour_id], 'method'=> 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}

      {!!Form::close() !!}
    @endif
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

@endsection