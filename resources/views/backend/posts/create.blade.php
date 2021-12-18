@extends('master')

@section('title', 'Create Post')

@section('content')

    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.dangerAlert')
        @include('shared.successAlert')
        <div class="card-header">Create post</div>
        <div class="card-body">
            <h5 class="card-title">What's in your mind?</h5>

            {!! Form::model($posts = null, ['route' => 'posts.store']) !!}

            <!-- Title input -->
            <div class="form-outline mb-4">
                {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title.post', 'required']) !!}
                {!! Form::label('title.post', 'Title', ['class' => 'form-label']) !!}
            </div>


            <!-- Content input -->
            <div class="form-outline mb-4">
                {!! Form::textarea('content', '', ['class' => 'form-control', 'id' => 'content.post', 'rows' => '4', 'required']) !!}
                {!! Form::label('content.post', 'Content', ['class' => 'form-label']) !!}
            </div>

            <!-- Category input -->
            <div class="form-outline mb-4">
                {!! Form::select('category_ids', $categoriesOptions, null, ['id' => 'category.post', 'placeholder' => 'Choose Category', 'class' => 'form-select form-select-lg mb-3', 'aria-label' =>'.form-select-lg example', 'multiple' => true]) !!}
            </div>

            <button class="btn btn-danger" type="reset">RESET</button>
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
