@extends('master')

@section('title', 'Manager Control Panel')

@section('content')
    <div class="mt-3 list-group">
        <div class="list-group-item">
            <div class="row-content">
                <h5><i class="far fa-grin-tongue mb-3"></i> Manage User</h5>
                {!! link_to('admin/users', 'All Users', ['class' => 'btn btn-warning']) !!}
            </div>
        </div>
        <div class="list-group-separator"></div>
        <div class="list-group-item">
            <div class="row-content">
                <h5><i class="fa fa-users mb-3"></i> Manage Roles</h5>
                {!! link_to('manager/roles', 'All Roles', ['class' => 'btn btn-info']) !!}
                {!! link_to('manager/roles/create', 'Create A Role', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
        <div class="list-group-separator"></div>
        <div class="list-group-item">
            <div class="row-content">
                <h5><i class="fas fa-file-signature mb-3"></i> Manage Posts</h5>
                {!! link_to('manager/posts', 'All Posts', ['class' => 'btn btn-info']) !!}
                {!! link_to('manager/posts/create', 'Create A Post', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
        <div class="list-group-separator"></div>
        <div class="list-group-item">
            <div class="row-content">
                <h5><i class="fas fa-cogs"></i> Manage Categories</h5>
                {!! link_to('manager/categories', 'All Categories', ['class' => 'btn btn-info']) !!}
                {!! link_to('manager/categories/create', 'New Category', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
        <div class="list-group-separator"></div>
    </div>

@endsection
