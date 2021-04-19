@extends('layouts.header')
@extends('layouts.navbar')

@section('content')
    <div class="container">
    {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store','method'=>'POST'])!!}
        <div class="form-group row">
            <div class="col-4">
            {{Form::label('Movie_name', 'Movie name:')}}
            {{Form::text('Movie_name','',['class'=>'form-control','placeholder'=>'Star wars'])}}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
                {{Form::label('rates', 'Rate:')}}
                {{Form::text('rates','',['class'=>'form-control','placeholder'=>'with love 1-5'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('comment', 'Comment:')}}
            {{Form::textarea('comment','',['class'=>'form-control','rows'=>'6'])}}
        </div>
        <div class="form-group">
            {{Form::label('picture', 'Picture:')}}
            {{Form::text('picture','',['class'=>'form-control','placeholder'=>'https://www.upsplash.com'])}}
        </div>

        <div class="form-group row">
            <div class="col-4">
                {{Form::label('username', 'Username:')}}
                {{Form::text('username','',['class'=>'form-control','placeholder'=>'Lala-chan'])}}
            </div>
        </div>

        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close()!!}
    </div>
@endsection
