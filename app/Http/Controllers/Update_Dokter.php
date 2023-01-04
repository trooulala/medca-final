<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Dokter;
use App\Models\Account;
use App\Models\Keluhan;
use App\Models\RumahSakit;

class Update_Dokter extends Controller
{
    public function info_dokter(Request $req) {
        $var = session('account')->Email;
        // $vvar = DB::select('select RS_ID from rumahsakit');
        
        // $rsid = RumahSakit::where('RS_ID');
        // $val = $vvar[0];
        // $vvar = RumahSakit;
        // $rsid = $vvar->RS_ID;
        $dokter = new Dokter;
        $dokter->Name_Dok = $req->namaDok;
        $dokter->id_rs = 1;
        $dokter->NIP = $req->nip;
        $dokter->Spesialisasi = $req->spesialisasi;
        $dokter->Tempat_RS = $req->tempat_rs;
        $dokter->Rating = $req->rating;
        $dokter->Foto_Dok = $req->foto_dok;
        $dokter->Email_Dok = $req->email_dok;
        $dokter->Pass_Dok = $req->pass_dok;
        $dokter->Email_AdminRS = $var;
        $dokter->save();

        return redirect('/admin-landing-info');
    }

    public function add_dokter() {
        return view('admin-addDoc');
    }

    public function update_dokter() {
        return redirect('/admin-landing-info');
    }

    public function show_dokter(Request $req) {
        $doks = DB::select('select * from dokter');
        // if ($req == null){
        //     $list = null;
        // } else {
        //     $list = Dokter::where('Spesialisasi', $req->kategori_dokter)->get();
        // }
        return view("form-buatjanji", ['doks'=>$doks]);
    }

    // public function landing_dokter() {
    //     return view('dokter-landingPage');
    // }

    public function show_keluhan_pasien() {
        $keluhan_pasien = DB::select('select * from ajukan_keluhan');
        return view("dokter-landingPage", ['keluhan_pasien'=>$keluhan_pasien]);
    }

    public function delete_dokter($dok) {
        DB::delete('delete from dokter where Name_Dok = ?', [$dok]);
        return redirect('/admin-landing-info');
    }

    public function show_profile_dokter() {
        $dokter = DB::select('select * from dokter');
        return view("dokter-landing", ['dokter' => $dok]);
    }

    public function delete_keluhan($Nama_Pasien) {
        DB::delete('delete from ajukan_keluhan where Nama_Pasien = ?',[$Nama_Pasien]);
        return redirect('/welcome');
    }
}
