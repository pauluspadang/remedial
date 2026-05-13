@extends('layouts.app')

@section('content')

<div class="card p-4">
    <h4 class="mb-3"><i class="bi bi-plus-circle"></i> Tambah Kendaraan</h4>

    <form method="POST" action="/kendaraan">
    @csrf

    <div class="mb-3">
        <label>Plat Nomor</label>
        <input type="text" name="plat_nomor" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nama Pemilik</label>
        <input type="text" name="nama_pemilik" class="form-control">
    </div>

    <div class="mb-3">
        <label>Merk Kendaraan</label>
        <input type="text" name="merk_kendaraan" class="form-control">
    </div>

    <div class="mb-3">
        <label>Keluhan</label>
        <textarea name="keluhan" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">
        <i class="bi bi-check-circle"></i> Simpan
    </button>

    <a href="/kendaraan" class="btn btn-secondary">Kembali</a>

    </form>
</div>

@endsection