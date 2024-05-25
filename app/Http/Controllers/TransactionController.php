<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('transaction.index', compact('transaction'));
    }

    public function create()
    {
        return view('transaction.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required|string|max:15',
            'id_barang' => 'required|string|max:15',
            'harga_produk' => 'required|numeric',
        ]);

        Transaction::create([
            'id_transaksi' => $request->id_transaksi,
            'id_barang' => $request->id_barang,
            'harga_produk' => $request->harga_produk,
        ]);

        return redirect()->route('transaction.index')->with('Sukses', 'Transaksi Berhasil.');
    }

    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transaction.show', compact('transaction'));
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transaction.edit', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_transaksi' => 'required|string|max:15',
            'id_barang' => 'required|string|max:15',
            'harga_produk' => 'required|numeric',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return redirect()->route('transaction.index')->with('Sukses', 'Update Transaksi Berhasil');
    }

    public function confirmDestroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.destroy', compact('transaction'));
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return redirect()->route('transactions.index')->with('Sukses', 'Transaksi Berhasil diDelete');
    }
}
