@extends('layouts.app')

@section('content')

<form method="POST" action="/kendaraan/{{ $k->id }}">
@csrf
@method('PUT')

<input type="text" name="plat_nomor" value="{{ $k->plat_nomor }}" class="form-control mb-2">
<input type="text" name="nama_pemilik" value="{{ $k->nama_pemilik }}" class="form-control mb-2">
<input type="text" name="merk_kendaraan" value="{{ $k->merk_kendaraan }}" class="form-control mb-2">
<textarea name="keluhan" class="form-control mb-2">{{ $k->keluhan }}</textarea>

<button class="btn btn-primary">Update</button>

</form>

@endsection