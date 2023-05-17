@extends('layout.main')

@section('title', 'Rent-Log')

@section('content')
<div class="full px-4">
    <h1 class="pt-bl">Rent Log List</h1>

    <div class="mt-5">
        <h2>User's Rent Log</h2>
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>
</div>
@endsection