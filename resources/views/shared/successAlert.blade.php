@if (session('success'))
    <div class="alert alert-success m-3" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session('successOfComment'))
    <div class="alert alert-success m-3" role="alert">
        {{ session('successOfComment') }}
    </div>
@endif
