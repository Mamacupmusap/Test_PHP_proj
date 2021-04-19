@extends('layouts.header')
@extends('layouts.navbar')

@section('content')
    <div>
        <a href="./posts/create"><button type="button" class="btn btn-outline-primary bootoon">+ Add New review</button></a>
        <div class="container box_post">
        @if(count($posts)>=1)
            @foreach ($posts as $post)
                <div class="card mb-3 box_review">
                    <img class="card-img-top" src="{{$post->picture}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$post->Movie_name}}</h5>
                    <p class="card-text">{{$post->comment}}</p>
                    <small>Rates: {{$post->rates}} , {{$post->username}}</small>
                    <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="container box_11">
                <h1 class="display-4">No Posts</h1>
            </div>
        @endif
        </div>

    </div>

@endsection
