@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary">Daftar Produk</h1>
            <a href="{{ route('produk.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Produk
            </a>
        </div>

        <!-- Card Section -->
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Produk Tersedia</h5>
            </div>
            <div class="card-body p-0">
                <!-- Table Section -->
                <table class="table table-striped table-hover table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produk as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->stok }}</td>
                                <td>Rp. {{ number_format($p->harga, 0, ',', '.') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('produk.edit', $p->id) }}" 
                                       class="btn btn-sm btn-warning text-white">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('produk.destroy', $p->id) }}" 
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Tidak ada produk tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
