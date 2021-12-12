<?php

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

Auth::routes();

Route::get('/welcome', function () {
  return view('Auth.welcome');
});

Route::get('/login1', function () {
  return view('Auth.login1');
});

Route::get('shop.index/', function () {
  return view('shop.index');
});

Route::get('artikel.index/', function () {
  return view('artikel.index');
});

Route::get('cekkal.index/', function () {
  return view('cekkal.index');
});

Route::get('konsultasi.index/', function () {
  return view('konsultasi.index');
});

Route::get('GymTerdekat.index/', function () {
  return view('GymTerdekat.index');
});

//MOVIE
Route::get('vidtutor.index/', function () {
  return view('vidtutor.index');
});

Route::get('vidtutor.Tutor1/', function () {
  return view('vidtutor.Tutor1');
});

Route::get('vidtutor.Tutor2/', function () {
  return view('vidtutor.Tutor2');
});

Route::get('vidtutor.Tutor3/', function () {
  return view('vidtutor.Tutor3');
});

Route::get('vidtutor.Tutor4/', function () {
  return view('vidtutor.Tutor4');
});

Route::get('vidtutor.Tutor5/', function () {
  return view('vidtutor.Tutor5');
});

Route::get('vidtutor.Tutor6/', function () {
  return view('vidtutor.Tutor6');
});

Route::get('vidtutor.Tutor7/', function () {
  return view('vidtutor.Tutor7');
});

Route::get('vidtutor.Tutor8/', function () {
  return view('vidtutor.Tutor8');
});

Route::get('about-us/', function () {
  return view('about-us');
});

Route::get('category/', function () {
  return view('category');
});

Route::get('howitworks/', function () {
  return view('howitworks');
});

Route::get('indexx/', function () {
  return view('indexx');
});

Route::get('pricing/', function () {
  return view('pricing');
});

//Materi
Route::get('materi.index/', function () {
  return view('materi.index');
});
Route::get('materi.pushup/', function () {
  return view('materi.pushup');
});
Route::get('materi.dipssq/', function () {
  return view('materi.dipssq');
});
Route::get('materi.jumpj/', function () {
  return view('materi.jumpj');
});
Route::get('materi.pullup/', function () {
  return view('materi.pullup');
});
Route::get('materi.situp/', function () {
  return view('materi.situp');
});
//
Route::get('fatloss.index/', function () {
  return view('materi.fatloss.index');
});
Route::get('fatloss.lari/', function () {
  return view('materi.fatloss.lari');
});
Route::get('fatloss.berenang/', function () {
  return view('materi.fatloss.berenang');
});
Route::get('fatloss.bersepeda/', function () {
  return view('materi.fatloss.bersepeda');
});
Route::get('fatloss.lompat_tali/', function () {
  return view('materi.fatloss.lompat_tali');
});
//

//
Route::get('nutrition.fatloss.index/', function () {
  return view('nutrition.fatloss.index');
});
Route::get('nutrition.fatloss.sayur/', function () {
  return view('nutrition.fatloss.sayur');
});
Route::get('nutrition.fatloss.alpukat/', function () {
  return view('nutrition.fatloss.alpukat');
});
Route::get('nutrition.fatloss.gandum/', function () {
  return view('nutrition.fatloss.gandum');
});
Route::get('nutrition.fatloss.kentang/', function () {
  return view('nutrition.fatloss.kentang');
});
//


//
Route::get('nutrition.index/', function () {
  return view('nutrition.index');
});
Route::get('nutrition.telur/', function () {
  return view('nutrition.telur');
});
Route::get('nutrition.dada/', function () {
  return view('nutrition.dada');
});
Route::get('nutrition.kedelai/', function () {
  return view('nutrition.kedelai');
});
Route::get('nutrition.salmon/', function () {
  return view('nutrition.salmon');
});
Route::get('nutrition.kacang/', function () {
  return view('nutrition.kacang');
});
Route::get('nutrition.yogurt/', function () {
  return view('nutrition.yogurt');
});
Route::get('nutrition.quinoa/', function () {
  return view('nutrition.quinoa');
});
Route::get('nutrition.bubuk/', function () {
  return view('nutrition.bubuk');
});
//

//
Route::get('workout_category/', function () {
  return view('workout_category');
});
Route::get('nutrition_category/', function () {
  return view('nutrition_category');
});
//

Route::get('profile/', function () {
  return view('profile');
});

Route::get('transaksi.index/', function () {
  return view('transaksi.index');
});

//Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'HomeController@index1')->name('home1');
Route::get('/', 'HomeController@index');

Route::resource('user', 'UserController');

Route::resource('register', 'UserController');

Route::resource('anggota', 'AnggotaController');

Route::resource('buku', 'BukuController');
Route::get('/format_buku', 'BukuController@format');
Route::post('/import_buku', 'BukuController@import');
//Workout
Route::resource('workout', 'WorkoutController');
//nutrisi
Route::resource('nutrisi', 'NutrisiController');
Route::get('/format_buku', 'WorkoutController@format');
Route::post('/import_buku', 'WorkoutController@import');
Route::resource('transaksi.daily', 'DailyController@index');
Route::resource('transaksi', 'TransaksiController');
//Route::resource('transaksi.daily', 'TransaksiController@index1');
Route::get('/transaksi.daily', 'DailyController@index1')->name('transaksi');
Route::resource('transaksii', 'DailyController');
Route::get('/laporan/trs', 'LaporanController@transaksi');
Route::get('/laporan/trs/pdf', 'LaporanController@transaksiPdf');
Route::get('/laporan/trs/excel', 'LaporanController@transaksiExcel');

Route::get('/laporan/buku', 'LaporanController@buku');
Route::get('/laporan/buku/pdf', 'LaporanController@bukuPdf');
Route::get('/laporan/buku/excel', 'LaporanController@bukuExcel');
