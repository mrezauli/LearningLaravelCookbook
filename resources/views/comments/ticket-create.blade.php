<div class="card border border-primary shadow-0 mt-5">
    @include('shared.dangerAlert')
    @include('shared.successAlert')
    <div class="card-header">Reply (Create comment)</div>
    <div class="card-body">

        {!! Form::model($comments = null, ['route' => 'comments.store']) !!}


        {!! Form::hidden('commentable_id', $ticket->id) !!}
        {!! Form::hidden('commentable_type', 'App\Models\Ticket') !!}

        <!-- Content input -->
        <div class="form-outline mb-4">
            {!! Form::textarea('content', '', ['class' => 'form-control', 'id' => 'content.comment', 'rows' => '5', 'required']) !!}
            {!! Form::label('content.comment', 'Content', ['class' => 'form-label']) !!}
        </div>
        <button class="btn btn-danger" type="reset">RESET</button>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
