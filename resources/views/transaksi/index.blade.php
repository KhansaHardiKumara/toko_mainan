@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary">Daftar Transaksi</h1>
            <a href="{{ route('transaksi.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Transaksi
            </a>
        </div>

        <!-- Card Container -->
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Daftar Transaksi</h5>
            </div>
            <div class="card-body p-0">
                <!-- Table -->
                <table class="table table-striped table-hover table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Kasir</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksi as $t)
                            <tr>
                                <td>{{ $t->id }}</td>
                                <td>{{ $t->kasir->nama }}</td>
                                <td>{{ $t->produk->nama }}</td>
                                <td>{{ $t->jumlah }}</td>
                                <td>Rp. {{ number_format($t->total_harga, 0, ',', '.') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('transaksi.edit', $t->id) }}" 
                                       class="btn btn-sm btn-warning text-white">
                                       <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('transaksi.destroy', $t->id) }}" 
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">Tidak ada transaksi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
