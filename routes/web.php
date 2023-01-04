<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Update_RS;
use App\Http\Controllers\Update_Dokter;
use App\Http\Controllers\Update_Keluhan;
use App\Http\Controllers\Update_Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', [User::class, 'index']);

Route::get('/welcome', function () {
    if(session('account')->Role == 'admin-rs'){
        return redirect('/admin-landing-info');
    } elseif(session('account')->Role == 'dokter') {
        return redirect('/dokter');
    } elseif (session('account')->Role == 'admin-article') {
        return redirect('/admin-article');
    } else {
        return redirect('/selamat-datang');
    }
});

Route::get('/buat janji', function() {
    return view('buatjanji');
});

Route::get('/upload-article', function() {
    return view('upload-article');
});

Route::get('/chat-dokter', function() {
    return view('chatDocter');
});

// Route::get('/add-doc', function() {
//     return view('admin-addDoc');
// });

// User
Route::get('/registrasi', [User::class, 'blank']);
Route::post('/registrasi', [User::class, 'registrasi']);
Route::get('/', [User::class, 'index']);
Route::get('/login', [User::class, 'login']);
Route::get('/logout', [User::class, 'logout']);
Route::get('/admin-edit-info-rs', [User::class, 'editrs']);
Route::post('/admin-edit-info-rs', [Update_RS::class, 'info_rs']);
Route::post('/admin-editupdate_ke-info-rs', [Update_RS::class, 'info_rs']);

//Update RS
Route::get('/rumah-sakit', [Update_RS::class, 'rs']);
Route::post('/update-rs', [Update_RS::class, 'update_rs']);
Route::get('/info-rs', [Update_RS::class, 'detail_rs']);


//
Route::get('/admin-edit-info-dokter', [Update_Dokter::class, 'add_dokter']);
Route::post('/add-dokter', [Update_Dokter::class, 'info_dokter']);
Route::get('/add-dokter', [User::class, 'update_dokter']);
Route::get('/admin-landing-info', [Update_RS::class, 'home']);
Route::get('/form-janji', [Update_Dokter::class, 'show_dokter']);
Route::get('/dokter', [Update_Dokter::class, 'show_keluhan_pasien']);
Route::post('/ajukan', [Update_Keluhan::class, 'keluhan']);
Route::get('/ajukan', [Update_Keluhan::class, 'update_keluhan']);
Route::get('/admin-add-article', [Update_Article::class, 'add_article']);
Route::post('/add-article', [Update_Article::class, 'save_article']);
Route::get('/add-article', [Update_Article::class, 'success_save']);
Route::get('/article', [Update_Article::class, 'show_article']);
Route::get('/isi/{Judul}/{Kategori}', [Update_Article::class, 'detail_article']);
Route::get('/selamat-datang', [Update_Article::class, 'show_article_index']);
Route::get('/admin-delete/{Name_Dok}', [Update_Dokter::class, 'delete_dokter']);
Route::get('/admin-article', [Update_Article::class, 'show_article_admin']);
Route::get('/admin-delete-article/{Judul}', [Update_Article::class, 'delete_article']);
Route::get('/dokter-delete-antrean/{Nama_Pasien}', [Update_Dokter::class, 'delete_keluhan']);



Route::resource('$dok', 'Update_Keluhan');
