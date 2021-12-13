<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;

class ProductController extends Controller
{
    public function tampil() {
        $product = Product::get();
        return view('pages.product.tampil_product', ['product' => $product]);
    }

    public function tambah() {
        return view('pages.product.tambah_product');
    }

    public function upload(Request $request) {
        $this->validate($request, [
            'id_product' => 'required',
            'nama_product' => 'required'
        ]);

        Product::create([
            'id_product' => $request->id_product,
            'nama_product' => $request->nama_product
        ]);

        return redirect('/product')->with('Success', 'Varian Produk Berhasil Ditambahan');
    }

    public function edit($id_product) {
        $product = Product::find($id_product);
        return view('pages.product.edit_product', ['product'=>$product]);
    }

    public function update($id_product, Request $request) {
        $this->validate($request, [
            'id_product' => 'required',
            'nama_product' => 'required'
        ]);

        $product = Product::find($id_product);
        $product->id_product = $request->id_product;
        $product->nama_product = $request->nama_product;
        $product->save();
        return redirect('/product')->with('Success', 'Varian Product Berhasil Diubah');
    }

    public function hapus($id_product) {
        $product = Product::where('id_product', $id_product)->delete();
        return redirect('/product')->with('Success', 'Varian Product Berhasil Dihapus');
    }
}
