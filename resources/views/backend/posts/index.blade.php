@extends('master')

@section('title', 'Index Title')

@section('content')
    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.successAlert')
        <div class="card-header">Index of post</div>
        <div class="card-body">
            <h5 class="card-title">your posts</h5>
            @if ($posts->isEmpty())
                <p class="text-dark bg-danger text-center">there is no post</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered border-info align-middle">
                        <caption>
                            List of posts
                        </caption>
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    </div>
                                </th>
                                <th scope="col">SL</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                        </div>
                                    </th>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td>{!! link_to_route('posts.show', $post->title, [$post->id]) !!}</td>
                                    <td>
                                    {!! $post->slug !!}</td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot class="table-dark">
                            <tr>
                                <th scope="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    </div>
                                </th>
                                <th scope="col">SL</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
