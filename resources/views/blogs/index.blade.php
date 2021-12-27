@extends('master')

@section('title', 'Index Title')

@section('content')
    @include('shared.successAlert')

    @if ($posts->isEmpty())
        <p class="text-dark bg-danger text-center">there is no post</p>
    @else

        @foreach ($posts as $post)
            <div class="card border border-primary shadow-0 mt-3">
            <div class="card-header">
                <h5 class="card-title">
                    {!! link_to_action('App\Http\Controllers\BlogsController@show', $post->title, $post->id) !!}
                </h5>
            </div>
            <div class="card-body">
                <p class="card-text">
                {{ mb_substr($post->content, 0, 500) }}
                </p>
            </div>
            </div>
        @endforeach
    @endif
@endsection
