@extends('master')

@section('title', 'Create Ticket')

@section('content')

    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.dangerAlert')
        @include('shared.successAlert')
        <div class="card-header">Create ticket</div>
        <div class="card-body">
            <h5 class="card-title">your voice to us</h5>

            {!! Form::model($tickets = null, ['route' => 'tickets.store']) !!}

            <!-- Title input -->
            <div class="form-outline mb-4">
                {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title.ticket', 'required']) !!}
                {!! Form::label('title.ticket', 'Title', ['class' => 'form-label']) !!}
            </div>


            <!-- Content input -->
            <div class="form-outline mb-4">
                {!! Form::textarea('content', '', ['class' => 'form-control', 'id' => 'content.ticket', 'rows' => '4', 'required']) !!}
                {!! Form::label('content.ticket', 'Content', ['class' => 'form-label']) !!}
            </div>
            <button class="btn btn-danger" type="reset">RESET</button>
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
