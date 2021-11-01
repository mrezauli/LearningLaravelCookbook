@foreach ($comments as $comment)
    <div class="card border border-primary shadow-0 mt-5">
        <div class="card-header"><strong>Status:</strong>{{ $comment->status ? 'Pending' : 'Answered' }}</div>
        <div class="card-body">
            <p>{{ $comment->content }}</p>
        </div>
    </div>
@endforeach
