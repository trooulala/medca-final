<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\RumahSakit;
use App\Models\Account;
// use App\Http\Controllers\User_Pasien;

class Update_RS extends Controller
{
    public function home() {
        // $temps = rumahsakit::where('Email_AdminRS', (session('account')->Email));
        $temps = DB::select('select * from rumahsakit');
        $doks = DB::select('select * from dokter');
        return view("admin-landingPage", ['temps'=>$temps], ['doks'=>$doks]);
    }

    public function info_rs(Request $req) {
        $var = session('account')->Email;
        $rumahsakit = new RumahSakit;
        $rumahsakit->Name_RS = $req->namaRS;
        $rumahsakit->Alamat_RS = $req->alamatRS;
        $rumahsakit->Telpon_RS = $req->telponRS;
        $rumahsakit->Foto_RS = $req->fotoRS;
        $rumahsakit->Deskripsi_RS = $req->deskripsiRS;
        $rumahsakit->Email_AdminRS = $var;
        $rumahsakit->save();

        return redirect('/admin-landing-info');
    }

    public function rs() {
        $temps = DB::select('select * from rumahsakit');
        return view('hospital', ['temps'=>$temps]);
    }

    public function update_rs(Request $req) {
        rumahsakit::where('Email_AdminRS', (session('account')->Email))->update(['Name_RS' => ($req->namaRS), 'Alamat_RS' => ($req->alamatRS), 'Telpon_RS' => ($req->telponRS), 'Foto_RS' => ($req->fotoRS), 'Deskripsi_RS' => ($req->deskripsiRS)]);
        return redirect('/admin-landing-info');
        
        
    }

    

    public function detail_rs(Request $req) {
        $temps = DB::select('select * from rumahsakit');
        return view('info-hospital', ['temps'=>$temps]);
    }
}
