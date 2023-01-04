<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Article;
use App\Models\Account;
use Carbon\Carbon;

class Update_Article extends Controller
{
    public function save_article(Request $req) {
        $var = session('account')->Email;
        $article = new Article;
        $article->Judul = $req->judul;
        $article->id_user = session('account')->AccountID;
        $article->Kategori = $req->kategori;
        $article->Cover_Article = $req->cover_article;
        $article->Paragraf = $req->paragraf;
        $article->Email_AdmArticle = $var;
        $article->save();

        return redirect('/welcome');
    }

    public function add_article() {
        return view('upload-article');
    }

    public function success_save() {
        return redirect('/welcome');
    }

    public function show_article() {
        $articles = DB::select('select * from artikel');
        return view('article', ['articles'=>$articles]);
    }

    public function detail_article($Judul, $Kategori){
        $artikel = Article::where(['Judul' => $Judul, 'Kategori' => $Kategori])->First();
        return view('isi-article', ['artikel'=>$artikel]);
    }

    public function show_article_index() {
        $articles = DB::select('select * from artikel');
        return view('index', ['articles'=>$articles]);
    }

    public function show_article_admin() {
        $temps = DB::select('select * from artikel');
        return view('landing-page-admin-article', ['article'=>$temps]);
    }

    public function delete_article($temp) {
        DB::delete('delete from artikel where Judul = ?',[$temp]);
        return redirect('/admin-article');
        // return view('landing-page-admin-artice');
    }
}
