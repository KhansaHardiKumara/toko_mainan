@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary">Tambah Produk</h1>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali ke Daftar Produk
            </a>
        </div>

        <!-- Card Section -->
        <div class="card shadow-lg">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Form Tambah Produk</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('produk.store') }}" method="POST">
                    @csrf
                    <!-- Nama Produk -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" 
                               placeholder="Masukkan nama produk" required>
                    </div>
                    <!-- Stok -->
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" 
                               placeholder="Masukkan jumlah stok" required>
                    </div>
                    <!-- Harga -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga" name="harga" 
                                   placeholder="Masukkan harga produk" required>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">
                        <i class="bi bi-check-circle"></i> Simpan Produk
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
