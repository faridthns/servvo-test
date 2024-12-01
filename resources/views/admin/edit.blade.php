@extends('layoutes.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Konfirmasi Status
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update', $id->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group w-25">
                        <label for="status">Status:</label>
                        <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                <option selected></option>
                                <option value="Dikonfirmasi">Dikonfirmasi</option>
                                <option value="Dibatalkan">Dibatalkan</option>
                            </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="tanggal_pengerjaan">Tanggal Pengerjaan:</label>
                            <input type="date" class="form-control @error('tanggal_pengerjaan') is-invalid @enderror" id="tanggal_pengerjaan" name="tanggal_pengerjaan" value="{{ $id->tanggal_pengerjaan  }}">
                            @error('tanggal_pengerjaan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="tanggal_selesai">Tanggal Selesai:</label>
                            <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" name="tanggal_selesai" value="{{  $id->tanggal_selesai }}">
                            @error('tanggal_selesai')
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