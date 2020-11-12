@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Project</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div > <a href="/site" class="btn btn-primary "> Go Back </a></div>
                        {{ Form::open(['action' => ['SiteController@update',$item->id],'method' => 'POST'] ) }}
                        <div class="form-group">
                            {{ Form::label('title','Project Title') }}
                            {{ Form::text('title',$item->title,['class'=> 'form-control','placeholder'=>'Title']) }}
                        </div>
                        <div class="form-group">
                            {{Form::label('start_date','Start Date')}}
                            {{ Form::date('start_date',$item->start_date,['class'=> 'form-control','placeholder'=>'Start Date']) }}
                        </div>
                        <div class="form-group">
                            {{Form::label('end_date','End Date')}}
                            {{ Form::date('end_date',$item->end_date,['class'=> 'form-control','placeholder'=>'End Date']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('no_of_works','Number of Workers') }}
                            {{ Form::number('no_of_works',$item->no_of_works,['class'=> 'form-control','placeholder'=>'Number of Workers']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('location','Location') }}
                            {{ Form::text('location',$item->location,['class'=> 'form-control','placeholder'=>'Location']) }}
                        </div>
                                                
                        <div class="form-group">
                            {{Form::hidden('_method','PUT')}}
                            {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }} 
                        </div>
                        {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection