<?php

namespace App\Http\Controllers;

use App\Models\Komponen;
use App\Models\Satuan;
use Illuminate\Http\Request;

class KomponenController extends Controller
{
    public function tampil() {
        $komponen = Komponen::join('tb_satuan', 'tb_komponen.id_satuan', "=", 'tb_satuan.id_satuan')
                    ->select('tb_komponen.*', 'tb_satuan.nama_satuan as satuan')
                    ->get();
        return view('pages.komponen.tampil_komponen', ['komponen'=>$komponen]);
    }

    public function tambah() {
        $satuan = Satuan::get();
        return view('pages.komponen.tambah_komponen', ['satuan' => $satuan]);
    }

    public function upload(Request $request) {
        $this->validate($request, [
            'id_komponen' => 'required',
            'nama_komponen' => 'required',
            'id_satuan' => 'required', 
            'harga' => 'required'
        ]);

        Komponen::create([
            'id_komponen' => $request->id_komponen,
            'nama_komponen' => $request->nama_komponen,
            'id_satuan' => $request->id_satuan,
            'harga' => $request->harga
        ]);

        return redirect('/komponen')->with('Success', 'Data Komponen Berhasil Ditambahkan');
    }

    public function edit($id_komponen) {
        $komponen = Komponen::find($id_komponen);
        $satuan = Satuan::all();
        return view('pages.komponen.edit_komponen', ['komponen' => $komponen, 'satuan'=> $satuan]);
    }

    public function update($id_komponen, Request $request) {
        $this->validate($request, [
            'id_komponen' => 'required',
            'nama_komponen' => 'required', 
            'id_satuan' => 'required',
            'harga' => 'required'
        ]);

        $komponen = Komponen::find($id_komponen);
        $komponen->id_komponen = $request->id_komponen;
        $komponen->nama_komponen = $request->nama_komponen;
        $komponen->id_satuan = $request->id_satuan;
        $komponen->harga = $request->harga;
        $komponen->save();
        return redirect('/komponen')->with('Success', 'Data Komponen Berhasil Diubah');
    }

    public function hapus($id_komponen) {
        $komponen = Komponen::where('id_komponen', $id_komponen)->delete();
        return redirect('/komponen')->with('Success', 'Data Komponen Berhasi Dihapus');
    }
}
