@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buat Transaksi Baru</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('transactions.store') }}">
                        @csrf
                            <!-- Vertical Form -->
                            <form class="row g-3">
                              <div class="col-12">
                                <label for="id_transaksi" class="form-label">ID Transaksi</label>
                                <input id="id_transaksi" type="text" class="form-control @error('id_transaksi') is-invalid @enderror" name="id_transaksi" value="{{ old('id_transaksi') }}" required autocomplete="id_transaksi">
                                @error('id_transaksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="col-12">
                                <label for="id_barang" class="form-label">ID Barang</label>
                                <input id="id_barang" type="text" class="form-control @error('id_barang') is-invalid @enderror" name="id_barang" value="{{ old('id_barang') }}" required autocomplete="id_barang">
                                @error('id_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="col-12">
                                <label for="harga_produk" class="form-label">Harga Produk</label>
                                <input id="harga_produk" type="text" class="form-control @error('harga_produk') is-invalid @enderror" name="harga_produk" value="{{ old('harga_produk') }}" required autocomplete="harga_produk">
                                @error('harga_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div><br><br>
                              <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                              </div>
                            </form><!-- Vertical Form -->
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
