@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary">Edit Produk</h1>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali ke Daftar Produk
            </a>
        </div>

        <!-- Card Section -->
        <div class="card shadow-lg">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0">Form Edit Produk</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Nama Produk -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" 
                               value="{{ $produk->nama }}" placeholder="Masukkan nama produk" required>
                    </div>

                    <!-- Stok -->
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" 
                               value="{{ $produk->stok }}" placeholder="Masukkan jumlah stok" required>
                    </div>

                    <!-- Harga -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga" name="harga" 
                                   value="{{ $produk->harga }}" placeholder="Masukkan harga produk" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-warning w-100 text-white">
                        <i class="bi bi-save"></i> Update Produk
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
