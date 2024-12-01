@extends('layoutes.admin')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard {{Auth::user()->username}}</h1>
 
        <div class="card mb-4">
            <div class="card-header">
                {{-- <i class=""></i> --}}
                <h4>Daftar Pengajuan</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Produk</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Tgl. Pengerjaan</th>
                            <th>Tgl. Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $db as $k )
                        <tr>
                            <td>{{ $k->id }}</td>
                            <td>{{ $k->nama }}</td>
                            <td>{{ $k->produk }}</td>
                            <td>{{ $k->tanggal }}</td>
                            <td>{{ $k->Lokasi }}</td>
                            <td>
                                <?php if ($k->Status == "Belum Dikonfirmasi") : ?>
                                <span class="btn btn-sm btn-warning ">{{ $k->Status }}</span>
                                <?php elseif ($k->Status == "Dikonfirmasi") : ?>
                                <span class="btn btn-sm btn-primary">{{ $k->Status }}</span>
                                <?php else : ?>
                                <span class="btn btn-sm btn-danger">{{ $k->Status }}</span>
                                <?php endif ?>
                            </td>
                            <td>{{ $k->Tanggal_pengerjaan }}</td>
                            <td>{{ $k->Tanggal_selesai }}</td>
                            <td>
                                <a href="{{ route('admin.edit', $k->id) }}" class="btn btn-sm btn-success">Konfirmasi</a>
                             </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection