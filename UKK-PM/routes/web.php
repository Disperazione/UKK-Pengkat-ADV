<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Http;
// use App\Http\Controllers\API\AuthController;
;

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


Route::get('/map', function() {
	return view('map');
})->name('map');

Route::get('/www.ngadu!.com', function() {
	$jumlah_pengaduan =	App\Models\Pengaduan::all()->count();
	$response = Http::get('https://newsapi.org/v2/top-headlines?country=id&apiKey=bb9e9d6c6c5f4dc78d0debd0ac41a6ab');
	$article = $response->json();
	for ($i=0; $i <= 4; $i++) { 
		$artikel[] = $article['articles'][$i];
	}
	// dd($artikel);
	return view('index',compact('jumlah_pengaduan','artikel'));
})->name('index');

Route::get('/login', function() {
	return view('login');
})->name('login');

Route::get('/register',[AuthController::class,'registerForm'])->name('form.register');
Route::post('/registerpost',[AuthController::class,'registerPost'])->name('register');
// Route::post('/kirimlogin', [AuthController::class,'login'])->name('kirimlogin');
// Route::post('/logout',[AuthController::class,'logout'])->name('logout');



// petugas
Route::group(['prefix'=>'petugas','middleware'=>['auth:petugas',]], function() {
	Route::get('/dashboard', [PetugasController::class,'dashboard'])->name('petugas.dashboard');

	// Petugas CRUD
	Route::group(['prefix'=>'admin'], function() {
		Route::get('/data',[PetugasController::class,'index'])->name('data.petugas');
		Route::get('/tambah',[PetugasController::class,'create'])->name('petugas.tambah');
		Route::post('/add',[PetugasController::class,'store'])->name('store.petugas');
		Route::get('/edit/{id}',[PetugasController::class,'edit'])->name('edit.petugas');
		Route::put('/edit/{id}',[PetugasController::class,'update'])->name('update.petugas');
		Route::delete('/data{id}',[PetugasController::class,'destroy'])->name('delete.petugas');
	});

	// Masyarakat CRUD
	Route::group(['prefix'=>'masyarakat'], function() {
		Route::get('/data',[MasyarakatController::class,'index'])->name('data.masyarakat');
		Route::get('/tambah',[MasyarakatController::class,'create'])->name('create.masyarakat');
		Route::post('/add',[MasyarakatController::class,'store'])->name('store.masyarakat');
		Route::get('/edit/{id}',[MasyarakatController::class,'edit'])->name('edit.masyarakat');
		Route::put('/update/{id}',[MasyarakatController::class,'update'])->name('update.masyarakat');
		Route::delete('/data/{id}',[MasyarakatController::class,'destroy'])->name('delete.masyarakat');
	});
	// Pengaduan
	Route::group(['prefix' => 'pengaduan', 'middleware'=>['auth']], function() {
		Route::get('/',[PengaduanController::class,'index'])->name('data.pengaduan');
		Route::post('/ajax',[PengaduanController::class,'ajax'])->name('data.pengaduan.ajax');
		Route::get('/entri',[PengaduanController::class,'entri'])->name('verifikasi');
		Route::get('/show/{id}',[PengaduanController::class,'detail'])->name('show.pengaduan');
		Route::get('/tanggapan/{id}',[PengaduanController::class,'getEntri'])->name('getEntri');
		Route::post('kirimtanggapan',[TanggapanController::class,'tanggapanPost'])->name('kirim.tanggapan');
		Route::get('/tolak/{id}',[TanggapanController::class,'tanggapanTolak'])->name('tolak.entri');
		Route::get('/clear/{id}','pengaduanController@clearTanggapan')->name('clear.tanggapan');

	});

	Route::group(['prefix' => 'report','middleware'=>['auth']], function() {
		Route::get('/laporan_masyarakat',[ReportController::class,'laporan_masyarakat'])->name('laporan.masyarakat');
		Route::get('/laporan_pengaduan',[ReportController::class,'laporan_pengaduan'])->name('laporan.pengaduan');
		Route::get('/pdf_masyarakat',[ReportController::class,'pdf_masyarakat'])->name('pdf.masyarakat');
		Route::get('/pdf_pengaduan',[ReportController::class,'pdf_pengaduan'])->name('pdf.pengaduan');
		Route::get('/pdf','reportController@pengaduan')->name('pengaduan.pdf');
	});

});





// Masyarakat
Route::group(['prefix'=>'user','middleware'=>['auth:masyarakat']], function() {
	Route::get('/',[MasyarakatController::class,'dashboard'])->name('masyarakat.dashboard');
	Route::get('/history/{id}',[MasyarakatController::class,'history'])->name('history.pengaduan');
	Route::get('/proses',[PengaduanController::class,'proses'])->name('proses.pengaduan');
	Route::get('/ditanggapi',[PengaduanController::class,'ditanggapi'])->name('tanggapi.pengaduan');
	Route::get('/tolak',[PengaduanController::class,'tolak'])->name('tolak.pengaduan');
	Route::post('/kirimpengaduan',[PengaduanController::class,'postPengaduan'])->name('post.pengaduan');
	Route::get('/tanggapan/detail/{id}',[PengaduanController::class,'tanggapanDetail'])->name('tanggapan');
	
});