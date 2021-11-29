@extends('master')

@section('title', 'Create Category')

@section('content')

    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.dangerAlert')
        @include('shared.successAlert')
        <div class="card-header">Create category</div>
        <div class="card-body">
            <h5 class="card-title">What's in your mind?</h5>

            {!! Form::model($categories = null, ['route' => 'categories.store']) !!}

            <!-- Title input -->
            <div class="form-outline mb-4">
                {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title.category', 'required']) !!}
                {!! Form::label('title.category', 'Title', ['class' => 'form-label']) !!}
            </div>

            <button class="btn btn-danger" type="reset">RESET</button>
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
