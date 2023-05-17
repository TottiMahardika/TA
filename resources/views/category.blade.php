@extends('layout.main')

@section('title', 'Category')

@section('content')
    <div class="px-4 pt-bl">

        <div class="d-flex justify-content-end">
            <a href="/category-deleted" class="btn btn-secondary me-5">View Deleted Data</a>
            <a href="/category-add" class="btn btn-primary">Add Data</a>
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
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a href="/category-edit/{{$item->slug}}" class="btn btn-warning">Edit</a>
                                <a href="/category-delete/{{$item->slug}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection