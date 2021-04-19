@extends('layouts.header')
@extends('layouts.navbar')

@section('content')
<div>
    <div class="container-fluid box_moviepage">
        <div class="center_box01">
            <h1 class="display-2 animate__animated animate__fadeInDown">Movie</h1>
            <form>
                <div class="form-group row">
                    <div class="col-4 box_inside_01">
                        <input type="text" class="form-control lead" id="newrecipe" placeholder="find your new movie!">
                    <br>
                        <a href="./category"><button type="button" class="btn btn-primary">Search</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid box_moviepage2">
        <h2 class="display-4 text-center text01">Movie is around your world!</h2>
        <div class="row container box02">
        <div class="center animate__animated animate__zoomIn col-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-badge-hd" viewBox="0 0 16 16">
                <path d="M7.396 11V5.001H6.209v2.44H3.687V5H2.5v6h1.187V8.43h2.522V11h1.187zM8.5 5.001V11h2.188c1.811 0 2.685-1.107 2.685-3.015 0-1.894-.86-2.984-2.684-2.984H8.5zm1.187.967h.843c1.112 0 1.622.686 1.622 2.04 0 1.353-.505 2.02-1.622 2.02h-.843v-4.06z"/>
                <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
            </svg>
            <h3 class="boxbox">Full HD</h3>
        </div>
        <div class="center animate__animated animate__zoomIn col-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-geo-altc" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <h3 class="boxbox">Anywhere</h3>
        </div>
        <div class="center animate__animated animate__zoomIn col-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-stopwatch" viewBox="0 0 16 16">
                <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
                <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
            </svg>
            <h3 class="boxbox">Anytime</h3>
        </div>
        </div>
    </div>

</div>
@endsection

