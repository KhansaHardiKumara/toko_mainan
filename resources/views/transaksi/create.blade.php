@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary">Tambah Transaksi</h1>
            <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali ke Daftar Transaksi
            </a>
        </div>

        <!-- Card Section -->
        <div class="card shadow-lg">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Form Tambah Transaksi</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                    <!-- Kasir -->
                    <div class="mb-3">
                        <label for="kasir_id" class="form-label">Kasir</label>
                        <select class="form-control" id="kasir_id" name="kasir_id" required>
                            @foreach ($kasir as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Produk -->
                    <div class="mb-3">
                        <label for="produk_id" class="form-label">Produk</label>
                        <select class="form-control" id="produk_id" name="produk_id" required>
                            @foreach ($produk as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Jumlah -->
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-info w-100 text-white">
                        <i class="bi bi-save"></i> Simpan Transaksi
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
