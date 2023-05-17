@extends('layout.main')

@section('title', 'Profile')

@section('content')
    <div >
        <div class="pt-bl px-4 full">
            <h3 class="text-center">Riwayat Peminjaman Buku Anda</h3>
            <x-rent-log-table :rentlog='$rent_logs' />
        </div>
    </div>

@endsection