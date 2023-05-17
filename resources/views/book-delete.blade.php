@extends('layout.main')

@section('title', 'Delete Book')

@section('content')
<div class="pt-bl px-4 full">
    <h2>Are you sure to delete book {{$book->title}} ?</h2>
    <div class="mt-5">
        <a href="/book-destroy/{{$book->slug}}" class="btn btn-danger me-5">Sure</a>
        <a href="/books" class="btn btn-primary">Cancel</a>
    </div>
</div>
@endsection