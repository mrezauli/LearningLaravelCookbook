@foreach ($errors->all() as $error)
    <div class="alert alert-danger m-3" role="alert">
        {{ $error }}
    </div>
@endforeach
