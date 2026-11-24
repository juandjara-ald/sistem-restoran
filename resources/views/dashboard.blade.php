@extends('layouts.app')

@section('title', 'Dashboard Restoran')

@section('content')
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h4 class="fw-bold">Selamat Datang, {{ auth()->user()->name }}!</h4>
        <p class="text-muted mb-0">Anda login sebagai <strong class="text-uppercase">{{ auth()->user()->role }}</strong>.</p>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <div class="card text-bg-primary shadow-sm">
            <div class="card-body">
                <h6>Total Menu</h6>
                <h3 class="fw-bold mb-0">{{ $totalMenu }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-success shadow-sm">
            <div class="card-body">
                <h6>Total Kategori</h6>
                <h3 class="fw-bold mb-0">{{ $totalKategori }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-warning shadow-sm">
            <div class="card-body">
                <h6>Total Pesanan</h6>
                <h3 class="fw-bold mb-0">{{ $totalOrder }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-dark shadow-sm">
            <div class="card-body">
                <h6>Total Pendapatan</h6>
                <h3 class="fw-bold mb-0">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>
</div>
@endsection