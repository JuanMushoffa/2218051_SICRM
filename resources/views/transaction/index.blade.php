@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Transaksi</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buat Transaksi Baru</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>ID Barang</th>
                        <th>Harga Produk</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $transaction)
                        <tr>
                            <td>{{ $transaction->id_transaksi }}</td>
                            <td>{{ $transaction->id_barang }}</td>
                            <td>{{ $transaction->harga_produk }}</td>
                            <td>
                                <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
