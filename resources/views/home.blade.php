@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                            <br>
                        <a href="/tours/create" class="btn btn-primary"> Create a Tour </a><br>

                        <table class="table table-striped"> <br>
                            <tr>
                                <th>Title</th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        
                            @foreach($tours as $tour)
                                
                                <tr>
                                    <th>{{$tour->fp_title}}</th>
                                    <th> <a href="/tours/{{$tour->tour_id}}/edit" class="btn btn-default"> Edit </a></th>
                                    <th> </th>
                                </tr>

                            @endforeach
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
