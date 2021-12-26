@extends('master')

@section('title', 'Edit Post')

@section('content')

    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.dangerAlert')
        @include('shared.successAlert')
        <div class="card-header">Edit post</div>
        <div class="card-body">
            <h5 class="card-title">your voice to us</h5>

            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}

            <!-- Title input -->
            <div class="form-outline mb-4">
                {!! Form::text('title', $post->title, ['class' => 'form-control', 'id' => 'title.post', 'required']) !!}
                {!! Form::label('title.post', 'Title', ['class' => 'form-label']) !!}
            </div>

            <!-- Content input -->
            <div class="form-outline mb-4">
                {!! Form::textarea('content', $post->content, ['class' => 'form-control', 'id' => 'content.post', 'rows' => '5', 'required']) !!}
                {!! Form::label('content.post', 'Content', ['class' => 'form-label']) !!}
            </div>

            <!-- Category input -->
            <div class="form-outline mb-4">
                {!! Form::select('category_ids[]', $categoriesOptions, $selectedCategories, ['id' => 'category.post', 'placeholder' => 'Choose Category', 'class' => 'form-select form-select-lg mb-3', 'aria-label' =>'.form-select-lg example', 'multiple' => true]) !!}
            </div>

            <button class="btn btn-danger" type="reset">RESET</button>
            {!! Form::submit('UPDATE', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
