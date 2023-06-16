<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function index(){
        $pegawai = DB::table('pegawai')->paginate(10);
       return view('admin.data_pegawai', ['pegawai' => $pegawai]); 
    }
    
    public function data_dokter(){
        $dokter = DB::table('dokter')->paginate(10);
        return view('admin.data_dokter', ['dokter' => $dokter]);
    }
    
    public function jadwal_praktek(){
        $jadwal = DB::table('dokter')->join('jadwal', 'jadwal.id_dokter', '=', 'dokter.id')->select('jadwal.*', 'dokter.nama')->paginate(10);
        return view('admin.jadwal_praktek', ['jadwal' => $jadwal]);
    }
    
    public function data_pasien(){
        $pasien = DB::table('pasien')->paginate(10);
        return view('admin.data_pasien', ['pasien' => $pasien]);
    }
    
    public function tempat_tidur(){
        $tmptidur = DB::table('tempat_tidur')->paginate(10);
        return view('admin.tempat_tidur', ['tmptidur' => $tmptidur]);
    }
    
    public function data_rawat(){
        $rawatinap = DB::table('data_rawat')->join('pasien', 'data_rawat.id_pasien', '=', 'pasien.id')->select('data_rawat.*', 'pasien.nama')->paginate(10);
        return view('admin.data_rawat', ['datarawat' => $rawatinap]);
    }
    
    public function obat_perlengkapan(){
        $obat = DB::table('obat')->paginate(10);
        return view('admin.obat_perlengkapan', ['obat' => $obat]);
    }
    
    public function data_tindakan(){
        $tindakan = DB::table('tindakan')->join('pasien', 'tindakan.id_pasien', '=', 'pasien.id')->select('tindakan.*', 'pasien.nama')->paginate(10);
        return view('admin.data_tindakan', ['tindakan' => $tindakan]);
    }
    public function data_kehamilan(){
        $kehamilan = DB::table('kehamilans')->paginate(10);
        return view('admin.data_kehamilan', ['kehamilan' => $kehamilan]);
    }
    public function data_persalinan(){
        $persalinan = DB::table('persalinans')->paginate(10);
        return view('admin.data_persalinan', ['persalinan' => $persalinan]);
    }
    public function data_nifas(){
        $nifas = DB::table('nifas')->paginate(10);
        return view('admin.data_nifas', ['nifas' => $nifas]);
    }
    public function data_kb(){
        $kb = DB::table('kbs')->paginate(10);
        return view('admin.data_kb', ['kb' => $kb]);
    }
    
    
}
