@extends('master')

@section('title', 'Home')

@section('content')

    <div class="card text-center border border-primary shadow-0 ">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/113.jpg" class="img-fluid" />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
            </a>
        </div>
        <div class="card-header">Featured Page</div>
        <div class="card-body">
            <h3 class="card-title">{{ trans('main.subtitle') }}</h3>
            <h5 class="card-title">Home</h5>
            <p class="card-text">
                Home! Sweet Home!
            </p>

            <button type="button" class="btn btn-primary">Just do it</button>
        </div>
        <div class="card-footer">2 days ago</div>
    </div>

@endsection
