<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Dokter;

class User extends Controller
{
    public function blank(){
        return view("registrasi");
    }


    // REGISTRASI SESSION
    public function registrasi(Request $req){
        $account = new Account;
        $account->Name = $req->nama;
        $account->Username = $req->username;
        $account->Email = $req->email;
        $account->Password = $req->password;
        $account->save();

        return redirect('/login');
    }

    //Login Session
    public function session(){
        return session('account');
    }

    public function index(){
        $var=session('account');
        if($var == null){
            return view("login");
        }
        return view('index');
    }

    public function login(Request $req){
        $account = Account::where('Email', $req->email)->where('Password',$req->password)->First();
        $acc_dok = Dokter::where('Email_Dok', $req->email)->where('Pass_Dok', $req->password)->First();
        
        

        if((!empty($account)) || (!empty($acc_dok))){
            $domain_adm = null;
            $domain_dok = null;
            $domain_arc = null;
            if(!empty($account)) {
                $parts_adm = explode('@', $account->Email);
                $domain_adm = $parts_adm[1];
                
                $parts_arc = explode('@', $account->Email);
                $domain_arc = $parts_adm[1];

                if (($domain_adm == 'adminrs.com')){
                    $account->Role = 'admin-rs';
                    session(['account'=>$account]);
                    return redirect('/welcome');
                } elseif ($domain_arc == 'adminarticle.com') {
                    $account->Role = 'admin-article';
                    session(['account'=>$account]);
                    return redirect('/welcome');
                } else {
                    $account->Role = 'pasien';
                    session(['account'=>$account]);
                    // return redirect('/welcome')->with("login-succsess");
                    return redirect('/welcome')->with("login-success", "login berhasil");
                }
            } elseif (!empty($acc_dok)) {
                $parts_dok = explode('@', $req->email);
                $domain_dok = $parts_dok[1];
                if (($domain_dok == 'dokter.com')) {
                    $acc_dok->Role = 'dokter';
                    session(['account'=>$acc_dok]);
                    return redirect('/welcome');
                }
            }
        } else {
            return redirect("/")->with("alert","User tidak ditemukan !!!");
        }
    }

    public function editrs() {
        return view("admin-editinfoRS");
    }
    
    public function logout(){
        session(['account'=>null]);
        return redirect('/');
    }
}
