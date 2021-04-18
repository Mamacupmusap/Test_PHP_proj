@extends('layouts.header')
@extends('layouts.navbar')

@section('content')
<div>
    <div class="container">
    <form>
        <div class="form-group row">
          <div class="col-4">
            <label for="newrecipe">Movie name:</label>
            <input type="text" class="form-control" id="newrecipe" placeholder="Star wars">
          </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
            <label for="formControlRange">Rate:</label>
            <input type="range" class="form-control-range" id="formControlRange">
            </div>
        </div>
        <div class="form-group">
            <label for="howtodo">Comment:</label>
            <textarea class="form-control" id="howtodo" rows="6"></textarea>
          </div>
        <div class="form-group">
            <label for="pic_recipe">Picture:</label>
            <input type="file" class="form-control-file" id="pic_recipe">
        </div>

        <div class="form-group row">
            <div class="col-4">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Lala-chan">
            </div>
        </div>
    </form>

        <a href="./recipe"><button type="button" class="btn btn-outline-primary">Submit</button></a>
    </div>
</div>
@endsection
