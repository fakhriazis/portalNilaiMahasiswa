<?php

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
    return view('welcome');
});

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Symfony\Polyfill\Intl\Grapheme\Grapheme;

Route::get('/', function () {
    return redirect('sign-in');
})->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/main', [MainController::class, 'index'])->middleware('auth')->name('main');
Route::get('/grade', [GradeController::class, 'index'])->middleware('auth')->name('grade');

//Route Grade
Route::get('/grade/show_matkul/{id_matkul}/{id_kelas}/{id_semester}', [GradeController::class, 'showMhsMatkul'])->middleware('auth')->name('showGrade');
Route::get('/grade/preview_nilai/{id_matkul}/{id_kelas}/{id_kontrak}', [GradeController::class, 'previewNilai'])->middleware('auth')->name('previewGrade');
Route::post('/grade/input_detail/', [GradeController::class, 'storeGrade'])->middleware('auth')->name('storeGrade');
Route::get('/grade/mahasiswa/input/{nim}/{id_kelas}/{id_kontrak}', [GradeController::class, 'storeGradeDetail'])->middleware('auth')->name('storeGradeDetail');
Route::post('/grade/mahasiswa/inputDetailNilai', [GradeController::class, 'inputDetailNilai'])->name('inputDetailNilai');
Route::get('/grade/mahasiswa/edit/{nim}/{id_kelas}/{id_kontrak}', [GradeController::class, 'detailNilai'])->name('detailNilai');
Route::post('/grade/mahasiswa/edit/{id_kelas}', [GradeController::class, 'editDetailNilai'])->name('editDetailNilai');

//Route Bobot
Route::get('/grade/update_bobot_nilai/{id_matkul}/{id_kelas}', [GradeController::class, 'updateBobotNilai'])->middleware('auth')->name('viewUpdateBobot');
Route::put('/grade/update_bobot_nilai/{id_bobot}', [GradeController::class, 'update2'])->middleware('auth')->name('updateBobot');
Route::post('/grade/bobot_nilai/store_bobot/{id_kelas}', [GradeController::class, 'storeBobot'])->middleware('auth')->name('storeBobot');
Route::get('/grade/bobot_nilai/{id_matkul}/{id_kelas}', [GradeController::class, 'bobotNilai'])->middleware('auth')->name('showBobotGrade');

//Route Standar Nilai
Route::get('/grade/update_standar_nilai/{id_matkul}/{id_kelas}', [GradeController::class, 'updateStandarNilai'])->middleware('auth')->name('viewUpdateStandarNilai');

//Route Nilai Mahasiswa
Route::get('/grade/indexMahasiswa/', [GradeController::class, 'indexMahasiswa'])->middleware('auth')->name('indexMahasiswa');
Route::get('/grade/mahasiswa/{nim}', [GradeController::class, 'viewNilaiMahasiswa'])->middleware('auth')->name('viewNilaiMahasiswa');
Route::get('/grade/mahasiswa-detail-nilai/{nim}/{id_kontrak}/{id_kelas}', [GradeController::class, 'viewDetailNilaiMahasiswa'])->middleware('auth')->name('viewDetailNilaiMahasiswa');

Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
    return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
    return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('billing', function () {
        return view('pages.billing');
    })->name('billing');
    Route::get('tables', function () {
        return view('pages.tables');
    })->name('tables');
    Route::get('rtl', function () {
        return view('pages.rtl');
    })->name('rtl');
    Route::get('virtual-reality', function () {
        return view('pages.virtual-reality');
    })->name('virtual-reality');
    Route::get('notifications', function () {
        return view('pages.notifications');
    })->name('notifications');
    Route::get('static-sign-in', function () {
        return view('pages.static-sign-in');
    })->name('static-sign-in');
    Route::get('static-sign-up', function () {
        return view('pages.static-sign-up');
    })->name('static-sign-up');
    Route::get('user-management', function () {
        return view('pages.laravel-examples.user-management');
    })->name('user-management');
    Route::get('user-profile', function () {
        return view('pages.laravel-examples.user-profile');
    })->name('user-profile');
});
