@extends('layout.main')

@section('title', 'Delete User')

@section('content')
<div class="full pt-bl px-4">
    <h2>Are you sure to delete user {{$user->username}} ?</h2>
    <div class="mt-5">
        <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger me-5">Sure</a>
        <a href="/users" class="btn btn-primary">Cancel</a>
    </div>
</div>
@endsection