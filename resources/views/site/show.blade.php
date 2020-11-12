@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$item->title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/site" class="btn btn-primary "> Go Back </a> 
                   <div class="card">
                        Title : {{$item->title}}
                   </div>
                   <div class="card">
                        Start Date : {{$item->start_date}}
                    </div>
                    <div class="card">
                        End Date : {{$item->end_date}}
                    </div>
                    <div class="well">
                        Number of Workers : {{$item->no_of_workers}}
                    </div>
                    <div class="well">
                        Location : {{$item->location}}
                    </div>
                    <hr>
                    <a href="/site/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action'=>['SiteController@destroy',$item->id],'method'=> 'POST','class'=> 'float-right']) !!}
                        {{ Form::hidden('_method','DELETE') }}
                        {{ Form::submit('Delete',['class'=> 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

