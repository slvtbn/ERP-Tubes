<?php

namespace App\Http\Controllers;

use App\Models\HargaKomponen;
use App\Models\Komponen;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HargaKomponenController extends Controller
{
    public function tampil() {
        $harga_komponen = HargaKomponen::join('tb_product', 'tb_harga_komponen.id_product', '=', 'tb_product.id_product')
                        -> join('tb_komponen', 'tb_harga_komponen.id_komponen', '=', 'tb_komponen.id_komponen')
                        -> select('tb_harga_komponen.*', 'tb_product.nama_product as product', 'tb_komponen.nama_komponen as komponen')
                        -> get();

        return view ('.pages.harga_komponen.tampil_harga_komponen', ['harga_komponen'=>$harga_komponen]);
    }

    public function tambah() {
        $product = Product::get();
        $komponen = Komponen::get();
        $harga_komponen = HargaKomponen::get();

        return view('pages.harga_komponen.tambah_harga_komponen', compact('product', 'komponen', 'harga_komponen'));
    }

    public function upload(Request $request) {
        // mengambil harga dari tabel komponen
        $komponen = Komponen::find($request->id_komponen);
        if($komponen->id_komponen == $request->id_komponen) {
                $harga = $komponen->harga;
        }
        $this->validate($request,[
            'id_product' => 'required',
            'id_komponen' => 'required',
            'jumlah' => 'required',
        ]);

        HargaKomponen::create([
            'id_product' => $request->id_product,
            'id_komponen' => $request->id_komponen,
            'jumlah' => $request->jumlah,
            'harga' => $request->jumlah * $harga
        ]);

        return redirect('/harga_komponen')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id_harga_komponen) {
        $harga_komponen = HargaKomponen::find($id_harga_komponen);
        $product = Product::all();
        $komponen = Komponen::all();

        return view('pages.harga_komponen.edit_harga_komponen', compact('harga_komponen', 'product', 'komponen'));
    }

    public function update($id_harga_komponen, Request $request) {
        // mengambil harga komponen dari tabel komponen
        $komponen = Komponen::find($request->id_komponen);
        @dd($request);
        if($komponen->id_komponen == $request->id_komponen) {
            $harga = $komponen->harga;
        }
        $this->validate($request, [
            'id_product' => 'required',
            'id_komponen' => 'required',
            'jumlah' => 'required', 
            'harga' => 'required'
        ]);

        $harga_komponen = HargaKomponen::find($id_harga_komponen);
        $harga_komponen->id_product = $request->id_product;
        $harga_komponen->id_komponen = $request->id_komponen;
        $harga_komponen->jumlah = $request->jumlah;
        $harga_komponen->harga = $request->jumlah * $harga;
        $harga_komponen->save();

        return redirect('/harga_komponen')->with('Success', 'Data Berhasil Diubah');
    }

    public function hapus($id_harga_komponen) {
        $harga_komponen = HargaKomponen::where('id_harga_komponen', $id_harga_komponen)->delete();
        return redirect('/harga_komponen')->with('Success', 'Data Berhasil Dihapus');
    }
}
