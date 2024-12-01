@extends('layoutes.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Pengajuan Refilling</h1>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Pengajuan Refilling
            </div>
            <div class="card-body">
                <form action="{{ route('index.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="produk">Produk:</label>
                            <select class="form-select @error('produk') is-invalid @enderror" id="produk" name="produk">
                                <option selected></option>
                                <option value="SM-404">SM-404</option>
                                <option value="SM-433">SM-433</option>
                            </select>
                            @error('produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-6">
                            <label for="lokasi">Lokasi:</label>
                            <select class="form-select @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi">
                                <option selected></option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Batam">Batam</option>
                                <option value="Surabaya">Surabaya</option>
                            </select>
                            @error('lokasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="tanggal">Jadwal:</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection