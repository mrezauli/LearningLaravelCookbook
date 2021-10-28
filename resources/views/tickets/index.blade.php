@extends('master')

@section('title', 'Index Title')

@section('content')
    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.successAlert')
        <div class="card-header">Index of ticket</div>
        <div class="card-body">
            <h5 class="card-title">your comments</h5>
            @if ($tickets->isEmpty())
                <p class="text-dark bg-danger text-center">there is no ticket</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered border-info align-middle">
                        <caption>
                            List of users
                        </caption>
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    </div>
                                </th>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                        </div>
                                    </th>
                                    <th scope="row">{{ $ticket->id }}</th>
                                    <td>
                                    {!! link_to_route('tickets.show', $ticket->title, [$ticket->slug]) !!}</td>
                                    <td>{{ $ticket->status ? 'Pending' : 'Answered' }}</td>
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
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
