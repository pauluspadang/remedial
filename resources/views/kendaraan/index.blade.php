@extends('layouts.app')

@section('content')

<h3 class="mb-4">Dashboard Kendaraan</h3>

{{-- CARD STAT --}}
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card-box card-blue">
            <h5>Total Kendaraan</h5>
            <h2>{{ count($data) }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-box card-green">
            <h5>Servis Hari Ini</h5>
            <h2>{{ count($data) }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-box card-orange">
            <h5>Status Aktif</h5>
            <h2>Aktif</h2>
        </div>
    </div>
</div>

{{-- DATA CARD --}}
<div class="row">
@forelse($data as $k)
    <div class="col-md-4 mb-3">
        <div class="vehicle-card">

            <h5>🚗 {{ $k->plat_nomor }}</h5>
            <p><b>{{ $k->nama_pemilik }}</b></p>

            <span class="badge bg-primary">{{ $k->merk_kendaraan }}</span>

            <p class="mt-2 text-muted">{{ $k->keluhan }}</p>

            <div class="d-flex justify-content-between">
                <a href="/kendaraan/{{ $k->id }}/edit" class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil"></i>
                </a>

                <form action="/kendaraan/{{ $k->id }}" method="POST" onsubmit="return confirm('Hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
@empty
    <p>Tidak ada data</p>
@endforelse
</div>

{{-- FLOATING BUTTON --}}
<a href="/kendaraan/create" class="btn btn-primary floating-btn">
    <i class="bi bi-plus"></i>
</a>

@endsection