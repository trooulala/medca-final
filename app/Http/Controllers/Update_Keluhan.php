<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Account;
use App\Models\Dokter;
use App\Models\Keluhan;

class Update_Keluhan extends Controller
{
    public function keluhan(Request $req) {
        $pasien = session('account')->Email;
        $nama_pasien = session('account')->Name;
        // $a = DB::select('select id_dok from dokter');
        // var_dump($a);
        // exit;
        $keluhan = new Keluhan;
        $email_dokter = $req->input('email_dok');
        $nama_dokter = $req->input('nama_dok');
        $keluhan->Email_Pasien = $pasien;
        $keluhan->id_dok = $req->input('id_dok');
        $keluhan->id_user = session('account')->AccountID;
        $keluhan->Nama_Pasien = $nama_pasien;
        $keluhan->Email_Dokter = $email_dokter;
        $keluhan->Nama_Dokter = $nama_dokter;
        $keluhan->Keluhan = $req->keluhan;
        $keluhan->save();

        return redirect('/buat janji');
    }

    public function update_keluhan() {
        return view('buatjanji');
    }



    
}
