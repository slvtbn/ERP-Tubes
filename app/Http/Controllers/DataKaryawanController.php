<?php

namespace App\Http\Controllers;

use App\Models\DataKaryawan;
use App\Models\Gender;
use App\Models\Agama;
use App\Models\Department;
use Illuminate\Http\Request;

class DataKaryawanController extends Controller
{
    public function tampil() {
        $karyawan = DataKaryawan::join('tb_gender', 'tb_gender.id_gender', '=', 'tb_data_karyawan.id_gender')
                                 ->join('tb_agama', 'tb_agama.id_agama', '=', 'tb_data_karyawan.id_agama')
                                 ->join('tb_department', 'tb_department.id_bagian', '=', 'tb_data_karyawan.id_bagian')
                                 ->select('tb_data_karyawan.*', 'tb_gender.nama as gender', 'tb_agama.nama as agama', 'tb_department.nama as dept')
                                 ->get();
        return view('pages.data_karyawan.tampil_data_karyawan', compact('karyawan'));
    }

    public function detail($id_karyawan) {
        $karyawan = DataKaryawan::find($id_karyawan);

        $id_gender = $karyawan->id_gender;
        $id_agama = $karyawan->id_agama;
        $id_bagian = $karyawan->id_bagian;

        $gender = Gender::where('id_gender', $id_gender)->value('nama');
        $agama = Agama::where('id_agama', $id_agama)->value('nama');
        $dept = Department::where('id_bagian', $id_bagian)->value('nama');
        $gaji = Department::where('id_bagian', $id_bagian)->value('gaji');

        return view('pages.data_karyawan.detail', compact('karyawan', 'gender', 'agama', 'dept', 'gaji'));
    }

    public function tambah() {
        $gender = Gender::get();
        $agama = Agama::get();
        $dept = Department::get();
        return view('pages.data_karyawan.tambah_data_karyawan', compact('gender', 'agama', 'dept'));
    }         

    public function upload(Request $request) {
        $this->validate($request, [
            'id_karyawan' => 'required',
            'nama_karyawan' => 'required', 
            'no_ktp' => 'required',
            'id_gender' => 'required', 
            'id_agama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'status_kawin' => 'required',
            'pendidikan' => 'required',
            'pengalaman_kerja' => 'required',
            'status_pegawai' => 'required',
            'id_bagian' => 'required'
        ]);

        DataKaryawan::create([
            'id_karyawan' => $request->id_karyawan,
            'nama_karyawan' => $request->nama_karyawan,
            'no_ktp' => $request->no_ktp,
            'id_gender' => $request->id_gender,
            'id_agama' => $request->id_agama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'status_kawin' => $request->status_kawin,
            'pendidikan' => $request->pendidikan,
            'pengalaman_kerja' => $request->pengalaman_kerja,
            'status_pegawai' => $request->status_pegawai,
            'id_bagian' => $request->id_bagian
        ]);

        return redirect('/data_karyawan')->with('Success', 'Data Karyawan Berhasil Ditambahkan');
    }

    public function edit($id_karyawan) {
        $karyawan = DataKaryawan::find($id_karyawan);
        $gender = Gender::all();
        $agama = Agama::all();
        $dept = Department::all();

        return view('pages.data_karyawan.edit_data_karyawan', compact('karyawan', 'gender', 'agama', 'dept'));
    }  

    public function update($id_karyawan, Request $request) {
        $this->validate($request, [
            'id_karyawan' => 'required',
            'nama_karyawan' => 'required', 
            'no_ktp' => 'required',
            'id_gender' => 'required', 
            'id_agama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'status_kawin' => 'required',
            'pendidikan' => 'required',
            'pengalaman_kerja' => 'required',
            'status_pegawai' => 'required',
            'id_bagian' => 'required'
        ]);

        $karyawan = DataKaryawan::find($id_karyawan);
        $karyawan->id_karyawan = $request->id_karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->no_ktp = $request->no_ktp;
        $karyawan->id_gender = $request->id_gender;
        $karyawan->id_agama = $request->id_agama;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tgl_lahir = $request->tgl_lahir;
        $karyawan->telepon = $request->telepon;
        $karyawan->email = $request->email;
        $karyawan->alamat = $request->alamat;
        $karyawan->status_kawin = $request->status_kawin;
        $karyawan->pendidikan = $request->pendidikan;
        $karyawan->pengalaman_kerja = $request->pengalaman_kerja;
        $karyawan->status_pegawai = $request->status_pegawai;
        $karyawan->id_bagian = $request->id_bagian;

        $karyawan->save();

        return redirect('/data_karyawan')->with('Success', 'Data Berhasil Diubah');
    }

    public function hapus($id_karyawan) {
        $karyawan = DataKaryawan::where('id_karyawan', $id_karyawan)->delete();
        return redirect('/data_karyawan')->with('Success', 'Data Berhasil Dihapus');
    }
}
