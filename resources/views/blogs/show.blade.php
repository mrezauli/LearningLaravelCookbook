@extends('master')

@section('title', 'Show Post')

@section('content')

    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.dangerAlert')
        @include('shared.successAlert')
        <div class="card-header">{{ $post->title }}</div>
        <div class="card-body">
            <p><strong>Status:</strong>{{ $post->status ? 'Pending' : 'Answered' }}</p>
            <p>{{ $post->content }}</p>
            {!! link_to_route('posts.edit', 'Edit', [$post->slug], ['class' => 'btn btn-info']) !!}

            {!! Form::model($posts = null, ['route' => ['posts.destroy', $post->slug], 'method' => 'delete']) !!}
            {!! Form::submit('Destroy', ['class' => 'mt-3 btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    @include('comments.show')
    @include('comments.post-create')

@endsection
