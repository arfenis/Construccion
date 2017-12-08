 @extends('layouts.app')
  @extends('layouts.navbar')
  @section('content')

    <h1> Create a Tour </h1>
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
    <br>
    {!! Form::open(['action' => 'ToursController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        
        <div class="form-row">
                <div class="col-md-2 control-label text-left">
            
            {{Form::label('title','Title')}}
            {{Form::text('title','', ['class'=>'form-control', 'placeholder' => 'Title'])}} <br>
                </div>
        </div>

        <div class="form-row">
                <div class="col-md-2 control-label text-left">
            
            {{Form::label('tour_code','Code')}}
            {{Form::text('tour_code','', ['class'=>'form-control', 'placeholder' => 'Tour Code'])}} <br>
                </div>
        </div>


         <div class="form-group">
            
            {{Form::label('description','Body')}}
            {{Form::textarea('description','', ['class'=>'form-control', 'placeholder' => 'Tour Description'])}} <br>

        </div>

        <div class="form-group">
            
            {{Form::label('short_description','Short Description')}}
            {{Form::textarea('short_description','', ['class'=>'form-control', 'placeholder' => 'Tour Short Description'])}}

        </div>

        <div class="form-row">
                <div class="col-md-2 control-label text-left">
            
            {{Form::label('adult_price','Price')}}
            {{Form::text('adult_price','', ['class'=>'form-control', 'placeholder' => 'Price'])}} <br>
                </div>
        </div>

            <div class="form-gruop">
            Cover image <br>
                {{Form::file('cover_image')}}

            </div>

                         <br>

             <div class="col-12 col-md-3">
             <button id="crear" type="submit" class="btn btn-primary"> Create </button>
            </div>
            

    {!! Form::close() !!}
    </div>x`

  @endsection