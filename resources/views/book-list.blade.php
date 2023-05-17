@extends('layout.main')

@section('title', 'Book')

@section('content')
<div class="px-4">
        <form action="" method="get" class="pt-bl">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <select name="category" id="category" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Search Book's Title">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>

        <div>
            <div class="row">

                @foreach ($books as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="d-flex justify-content-center">
                                <img src="{{ $item->cover !=null ? asset('storage/cover/'.$item->cover) :
                                asset('images/cover-not-found.jpg') }}" class="card-img-top mt-3"
                                style = "width: 10rem; height: 15rem;" draggable="false">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$item->book_code}}</h5>
                                <p class="card-text">{{$item->title}}</p>
                                <p class="card-text text-end fw-bold {{ $item->status == 'in stock' ?
                                'text-success' : 'text-danger' }}">
                                    {{$item->status}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection