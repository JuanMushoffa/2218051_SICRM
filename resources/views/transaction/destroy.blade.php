@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Delete Transaksi</h2>
    <p>Apakah Anda yakin ingin menghapus transaksi ini?</p>
    <table class="table">
        <tr>
            <th>ID Transaksi</th>
            <td>{{ $transaction->id_transaksi }}</td>
        </tr>
        <tr>
            <th>ID Barang</th>
            <td>{{ $transaction->id_barang }}</td>
        </tr>
        <tr>
            <th>Harga Produk</th>
            <td>{{ $transaction->harga_produk }}</td>
        </tr>
    </table>
    <form action="{{ route('transactions.destroy', $transactions->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
        <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
