@extends('layouts.header')
@extends('layouts.navbar')

@section('content')
<div>
    <div class="container box_moviepage">
        <h1 class="display-4">Movie</h1>
        <form>
            <div class="form-group row">
                <div class="col-4">
                  <input type="text" class="form-control" id="newrecipe" placeholder="find your new movie!">
                  <a href="./category"><button type="button" class="btn btn-outline-primary">Search</button></a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

