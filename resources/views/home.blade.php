@extends('layouts.backend')

@section('judul')
    Beranda
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">Dashboard</h2>
            <h3 class="h5 text-muted mb-0">Selamat Datang Di Agenda DINKES.</h3>
        </div>
        <div class="text-center">
            <img src="{{ asset('media/logo.png') }}" alt="logo">
        </div>
    </div>
    <!-- END Page Content -->
@endsection
