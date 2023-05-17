@extends('layout.main')

@section('title', 'Delete Category')

@section('content')
<div class="pt-bl px-4 full">
    <h2>Are you sure to delete category {{$category->name}} ?</h2>
    <div class="mt-5">
        <a href="/category-destroy/{{$category->slug}}" class="btn btn-danger me-5">Sure</a>
        <a href="/categories" class="btn btn-primary">Cancel</a>
    </div>
</div>
@endsection