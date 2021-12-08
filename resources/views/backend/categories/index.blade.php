@extends('master')

@section('title', 'Index Title')

@section('content')
    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.successAlert')
        <div class="card-header">Index of category</div>
        <div class="card-body">
            <h5 class="card-title">your comments</h5>
            @if ($categories->isEmpty())
                <p class="text-dark bg-danger text-center">there is no category</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered border-info align-middle">
                        <caption>
                            List of categories
                        </caption>
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    </div>
                                </th>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                        </div>
                                    </th>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>
                                        {!! link_to_route('categories.show', $category->name, [$category->slug]) !!}</td>
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
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
