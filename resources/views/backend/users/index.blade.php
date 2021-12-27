@extends('master')

@section('title', 'Index Title')

@section('content')
    <div class="card border border-primary shadow-0 mt-5">
        @include('shared.successAlert')
        <div class="card-header">Index of user</div>
        <div class="card-body">
            <h5 class="card-title">your comments</h5>
            @if ($users->isEmpty())
                <p class="text-dark bg-danger text-center">there is no user</p>
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
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Joined At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                        </div>
                                    </th>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>
                                    {!! link_to_route('users.show', $user->name, [$user->slug ? $user->slug : '']) !!}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Joined At</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
