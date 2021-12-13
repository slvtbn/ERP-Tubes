<?php

namespace App\Http\Controllers;

use App\Models\DataKaryawan;
use App\Models\Gender;
use Illuminate\Http\Request;

class DataKaryawanController extends Controller
{
    public function tampil() {
        $karyawan = DataKaryawan::join('tb_gender', 'tb_gender.id_gender', '=', 'tb_data_karyawan.id_gender')
                                 ->select('tb_data_karyawan.*', 'tb_gender.nama as gender')
                                 ->get();
        return view('pages.data_karyawan.tampil_data_karyawan', compact('karyawan'));
    }

    public function tambah() {
        $gender = Gender::get();
        return view('pages.data_karyawan.tambah_data_karyawan', compact('gender'));
    }

    public function upload(Request $request) {
        $this->validate($request, [
            'id_karyawan' => 'required',
            'nama_karyawan' => 'required', 
            'id_gender' => 'required', 
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);

        DataKaryawan::create([
            'id_karyawan' => $request->id_karyawan,
            'nama_karyawan' => $request->nama_karyawan,
            'id_gender' => $request->id_gender,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        return redirect('/data_karyawan')->with('Success', 'Data Karyawan Berhasil Ditambahkan');
    }

    public function edit($id_karyawan) {
        $karyawan = DataKaryawan::find($id_karyawan);
        $gender = Gender::all();
        return view('pages.data_karyawan.edit_data_karyawan', compact('karyawan', 'gender'));
    }

    public function update($id_karyawan, Request $request) {
        $this->validate($request, [
            'id_karyawan' => 'required',
            'nama_karyawan' => 'required',
            'id_gender' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);

        $karyawan = DataKaryawan::find($id_karyawan);
        $karyawan->id_karyawan = $request->id_karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->id_gender = $request->id_gender;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tgl_lahir = $request->tgl_lahir;
        $karyawan->telepon = $request->telepon;
        $karyawan->email = $request->email;
        $karyawan->alamat = $request->alamat;
        $karyawan->save();

        return redirect('/data_karyawan')->with('Success', 'Data Berhasil Diubah');
    }

    public function hapus($id_karyawan) {
        $karyawan = DataKaryawan::where('id_karyawan', $id_karyawan)->delete();
        return redirect('/data_karyawan')->with('Success', 'Data Berhasil Dihapus');
    }
}
