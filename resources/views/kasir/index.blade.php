@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kasir</h1>
        <a href="{{ route('kasir.create') }}" class="btn btn-primary mb-3">Tambah Kasir</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kasir as $k)
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->email }}</td>
                        <td>
                            <!-- Add action buttons for editing or deleting kasir if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
