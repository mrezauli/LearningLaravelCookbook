@extends('master')

@section('title', 'Edit Ticket')

@section('content')

    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.dangerAlert')
        @include('shared.successAlert')
        <div class="card-header">Edit ticket</div>
        <div class="card-body">
            <h5 class="card-title">your voice to us</h5>

            {!! Form::model($ticket, ['route' => ['tickets.update', $ticket->slug], 'method' => 'put']) !!}

            <!-- Title input -->
            <div class="form-outline mb-4">
                {!! Form::text('title', $ticket->title, ['class' => 'form-control', 'id' => 'title.ticket', 'required']) !!}
                {!! Form::label('title.ticket', 'Title', ['class' => 'form-label']) !!}
            </div>


            <!-- Content input -->
            <div class="form-outline mb-4">
                {!! Form::textarea('content', $ticket->content, ['class' => 'form-control', 'id' => 'content.ticket', 'rows' => '4', 'required']) !!}
                {!! Form::label('content.ticket', 'Content', ['class' => 'form-label']) !!}
            </div>

            <!-- Status input -->
            <div class="form-outline mb-4">

            </div>

            <!-- Status input -->
            <div class="form-check">
                {{-- $ticket->status = 1 for unchecked / pending --}}
                {{-- $ticket->status = 0 for checked / answered --}}
                {!! Form::checkbox('status', 'InvertTheStatus', $ticket->status ? '' : 'checked', ['class' => 'form-check-input', 'id' => 'status.ticket']) !!}
                {!! Form::label('status.ticket', 'Close This Ticket?', ['class' => 'form-check-label']) !!}

            </div>

            <button class="btn btn-danger" type="reset">RESET</button>
            {!! Form::submit('UPDATE', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
