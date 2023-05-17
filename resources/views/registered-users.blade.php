@extends('layout.main')

@section('title', 'New Registered Users')

@section('content')
<div class="full pt-bl px-4">
    <h1>New Registered Users List</h1>

    <div class="my-5 d-flex justify-content-end">
        <a href="/users" class="btn btn-primary">Approved User List</a>
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
                @foreach($registeredUsers as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->username }}</td>
                    <td>
                        @if ($item->phone)
                            {{ $item->phone }}
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="/user-detail/{{ $item->slug }}" class="btn btn-secondary">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection