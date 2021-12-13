<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function tampil() {
        $order = Order::join('tb_product', 'tb_order.id_product', '=', 'tb_product.id_product')
                      -> select('tb_order.*', 'tb_product.nama_product as product')
                      -> get();
        return view('pages.order.tampil_order', ['order'=>$order]);
    }

    public function tambah() {
        $product = Product::get();
        return view ('pages.order.tambah_order', ['product'=>$product]);
    }

    public function upload(Request $request) {
        $this->validate($request,[
            'id_order' => 'required',
            'nama_pemesan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'id_product' => 'required',
            'jumlah_produk' => 'required',
            'tgl_order' => 'required',
            'tgl_selesai' => 'required',
        ]);

        Order::create([
            'id_order' => $request->id_order,
            'nama_pemesan' => $request->nama_pemesan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'id_product' => $request->id_product,
            'jumlah_produk' => $request->jumlah_produk,
            'tgl_order' => $request->tgl_order,
            'tgl_selesai' => $request->tgl_selesai
        ]);

        return redirect('/order')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id_order){
        $order = Order::find($id_order);
        $product = Product::all();

        return view('pages.order.edit_order', compact('order', 'product'));
    }

    public function update($id_order, Request $request) {
        $this->validate($request, [
            'id_order' => 'required',
            'nama_pemesan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'id_product' => 'required',
            'jumlah_produk' => 'required',
            'tgl_order' => 'required',
            'tgl_selesai' => 'required',
        ]);

        $order = Order::find($id_order);
        $order->id_order = $request->id_order;
        $order->nama_pemesan = $request->nama_pemesan;
        $order->alamat = $request->alamat;
        $order->telepon = $request->telepon;
        $order->id_product = $request->id_product;
        $order->jumlah_produk = $request->jumlah_produk;
        $order->tgl_order = $request->tgl_order;
        $order->tgl_selesai = $request->tgl_selesai;
        $order->save();

        return redirect('/order')->with('Success', 'Data Berhasil Diubah');
    }

    public function hapus($id_order) {
        $order = Order::where('id_order', $id_order)->delete();
        return redirect('/order')->with('Success', 'Data Berhasil Dihapus');
    }
}
