@extends('master')

@section('title', 'Show Ticket')

@section('content')

    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.dangerAlert')
        @include('shared.successAlert')
        <div class="card-header">{{ $ticket->title }}</div>
        <div class="card-body">
            <p><strong>Status:</strong>{{ $ticket->status ? 'Pending' : 'Answered' }}</p>
            <p>{{ $ticket->content }}</p>
            {!! link_to_route('tickets.edit', 'Edit', [$ticket->slug], ['class' => 'btn btn-info']) !!}

            {!! Form::model($tickets = null, ['route' => ['tickets.destroy', $ticket->slug], 'method' => 'delete']) !!}
            {!! Form::submit('Destroy', ['class' => 'mt-3 btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
