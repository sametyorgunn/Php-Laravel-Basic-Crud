<?php
use App\Http\Controllers\web;
use App\Http\Controllers\veritabaniislemleri;
use App\Http\Controllers\modelislemleri;
use App\Http\Controllers\FormdanPost;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/Web');
});
route::get("/Ekle",[veritabaniislemleri::class,"Ekle"]);
route::get("/Düzenle",[veritabaniislemleri::class,"Duzenle"]);
route::get("/Sil",[veritabaniislemleri::class,"Sil"]);
route::get("/Listele",[veritabaniislemleri::class,"Listele"]);
route::get("/birverigetir",[veritabaniislemleri::class,"birverigetir"]);
route::get("/ModelList",[modelislemleri::class,"list"]);
route::get("/Modelekle",[modelislemleri::class,"Ekle"]);
route::get("/Modelguncelle",[modelislemleri::class,"Guncelle"]);
route::get("/Modelsil",[modelislemleri::class,"Sil"]);
route::get("/Iletisim",[FormdanPost::class,"Index"]);
route::post("/IletisimEkle",[FormdanPost::class,"IletisimEkle"])->name('IletisimEkle');
