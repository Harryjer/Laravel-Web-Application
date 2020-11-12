@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Tasks</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div > <a href="/" class="btn btn-primary "> Go Back </a></div>
                        {{ Form::open(['action' => 'TaskController@store','method' => 'POST'] ) }}
                        <div class="form-group">
                            {{ Form::label('title','Project Title') }}
                            {{ Form::text('title','',['class'=> 'form-control','placeholder'=>'Title']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('task1','Task 1') }}
                            {{ Form::text('task1','',['class'=> 'form-control','placeholder'=>'Task 1']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('task2','Task 2') }}
                            {{ Form::text('task2','',['class'=> 'form-control','placeholder'=>'Task 2']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('task3','Task 3') }}
                            {{ Form::text('task3','',['class'=> 'form-control','placeholder'=>'Task 3']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('task4','Task 4') }}
                            {{ Form::text('task4','',['class'=> 'form-control','placeholder'=>'Task 4']) }}
                        </div>
                                                
                        <div class="form-group">
                            {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }} 
                        </div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection