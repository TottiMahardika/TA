@extends('layout.main')

@section('title', 'User')

@section('content')
    <div class="full">
        <h1 class="pt-bl text-center">User List</h1>

        <div class="px-4">
            <div class="my-5 d-flex justify-content-end">
                <a href="/user-banned" class="btn btn-secondary me-5">View Banned User</a>
                <a href="/registered-users" class="btn btn-primary">New Registered User</a>
            </div>

            <div class="mt-5">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <div class="my-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->username }}</td>
                            <td>
                                @if( $item->phone)
                                    {{ $item->phone }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <a href="/user-detail/{{ $item->slug }}" class="btn btn-secondary">Detail</a>
                                <a href="/user-ban/{{ $item->slug }}" class="btn btn-danger">Ban User</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection