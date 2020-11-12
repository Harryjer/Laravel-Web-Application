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
                    <a href="/task" class="btn btn-primary "> Go Back </a> 
                   <div class="card">
                        Title : {{$item->title}}
                   </div>
                   <div class="card">
                        Task 1 : {{$item->task1}}
                    </div>
                    <div class="card">
                        Task 2 : {{$item->task2}}
                    </div>
                    <div class="card">
                        Task 3 : {{$item->task3}}
                    </div>
                    <div class="card">
                        Task 4 : {{$item->task4}}
                    </div>
                    
                    <hr>
                    <a href="/task/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action'=>['TaskController@destroy',$item->id],'method'=> 'POST','class'=> 'float-right']) !!}
                        {{ Form::hidden('_method','DELETE') }}
                        {{ Form::submit('Delete',['class'=> 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 