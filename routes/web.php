<?php

use App\Http\Controllers\AksesController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PeminjamaController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UlasanController;
use App\Http\Middleware\UserAuth;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RelasiKController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::middleware([UserAuth::class])->group(function ()
// {

//     Route::resource('data/dashboard', DashboardController::class);
//     Route::resource('data/user', UserController::class);
//     Route::resource('data/buku', BukuController::class);
//     Route::resource('data/kategori', KategoriController::class);
//     Route::resource('data/relasiK', RelasiKController::class);

// });
Route::middleware('auth')->group(function () {
    // Routes that require authentication
    Route::resource('data/dashboard', DashboardController::class);
    Route::resource('data/user', UserController::class);
    Route::resource('data/buku', BukuController::class);
    Route::resource('data/kategori', KategoriController::class);
    Route::resource('data/relasiK', RelasiKController::class);
    Route::resource('data/peminjaman',PeminjamaController::class);
    Route::resource('data/pengembalian',PengembalianController::class);
    Route::resource('data/akses',AksesController::class);
    Route::resource('data/role',RoleController::class);

    Route::resource('ulasan',UlasanController::class);

    Route::POST('unlike',[KoleksiController::class,'unlike'])->name('unlike');
    Route::resource('data/koleksi',KoleksiController::class);

    Route::resource('data/invoice',InvoiceController::class);

    Route::get('laporan/buku',[BukuController::class,'laporan'])->name('laporan');
    Route::post('laporan/buku/cetak',[BukuController::class,'cetak'])->name('cetak');

    Route::resource('data/member', MemberController::class);
    Route::get('/profile/{id}', [ProfileController::class,'show'])->name('profile.show');
    Route::PUT('/profile/update/{id}', [MemberController::class, 'update_profile'])->name('update_profile');
    // Route::resource('profile', ProfileController::class);

    Route::resource('data/login',LoginController::class);
    // Route::post('/register',[LoginController::class,'register'])->name('register');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});

Route::get('/', [LandingPageController::class,'index2'])->name('/');

// Route::get('/', function () {
//     return view('/landingPage.index2');
// }) ->name('landingPage');

// Route::get('/pegawai',function(){
//     return view('/dashboard.pegawai');
// });

// Route::get('/anggota',function(){
//     return view('/dashboard.anggota');
// });

Route::get('/login',function(){
    return view('/login.login');
})->name('login');

Route::get('/register',function(){
    return view('/login.register');
})->name('register');

Route::get('/forgot',function(){
    return view('/login.forgot');
});

Route::get('/recovery',function(){
    return view('/login.recovery');
});

Route::get('/index', function(){
    return view('/landingPage.index');
});

Route::get('/forget', function () {
    return view('login.forgot');
})->name('forget');
Route::post('/reset', [LoginController::class,'reset'])->name('reset');

// Route::resource('data/dashboard', DashboardController::class);
Route::resource('/landingPage', LandingPageController::class);
// Route::resource('data/user', UserController::class);
// Route::resource('data/buku', BukuController::class);
// Route::resource('data/kategori', KategoriController::class);
// Route::resource('data/relasiK', RelasiKController::class);
// Route::resource('data/peminjaman',PeminjamaController::class);
// Route::resource('data/login',LoginController::class);
Route::post('/register',[LoginController::class,'register'])->name('register');
Route::post('/login',[LoginController::class,'login'])->name('login');
// Route::get('/logout',[LoginController::class,'logout'])->name('logout');
