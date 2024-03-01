<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FotoController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [AuthController::class, 'register']);

Route::post('/registered', [AuthController::class, 'registered']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        $user = auth()->user();
        return view('page.dashboard', compact('user'));
    });

    Route::get('/getDataExplore', [ExploreController::class, 'getdata']);

    Route::get('/detailfoto/{id}', function () {
        return view('page.detailfoto');
    });

    Route::get('/detailfoto/{id}/getdatadetail', [ExploreController::class, 'getdatadetail']);

    Route::get('/detailfoto/{id}', [ExploreController::class, 'getdetail']);

    Route::get('/detailfoto/getkomentar/{id}', [ExploreController::class, 'getdatakomentar']);

    Route::post('/detailfoto/kirimkomentar', [ExploreController::class, 'kirimkankomentar']);

    Route::get('/detailfoto/likefoto/{id}', [ExploreController::class, 'likefoto']);

    Route::post('/detailfoto/likefoto/{id}', [ExploreController::class, 'likefoto']);

    Route::get('/profile/{id}', [UserController::class, 'profil']);

    //meanmpilkan di halaman profil

    Route::get('/profile/getprofil/{id}', [UserController::class, 'getprofile']);

    //menambildata untuk profil di console

    Route::get('/getDatafotoprofile/', [UserController::class, 'getdata']);

    Route::get('/album', [UserController::class, 'pilihalbum']);

    Route::get('/editpp', [UserController::class, 'editpp']);

    Route::post('/update', [UserController::class, 'updatepp']);

    Route::get('/editpassword', [FotoController::class, 'editpas']);

    Route::post('/updatepassword', [UserController::class, 'updatepasword']);

    Route::get('/editpostingan/{id}', [FotoController::class, 'editfoto']);

    Route::post('/updatepost/{id}', [FotoController::class, 'updatefoto']);

    Route::get('/datadetailfoto/delete/{id}', [FotoController::class, 'delete']);

    Route::post('/foto/{id}/like', [FotoController::class, 'likeFoto']);

    Route::get('/upload', [FotoController::class, 'upload']);

    Route::post('/uploadfoto', [FotoController::class, 'uploadfoto']);

    Route::get('/album', [AlbumController::class, 'album']);

    Route::post('/buat-album', [AlbumController::class, 'buatalbum']);

    // Route::post('/buat-album2', [AlbumController::class, 'tambahkanalbumbaru']);

    Route::get('/detailalbum/{id}', [AlbumController::class, 'detailalbum']);

    Route::get('/pilihalbum/{id}', [AlbumController::class, 'pilihalbum']);

    Route::post('/editalbum/{id}', [AlbumController::class, 'tambahAlbum']);
    
    Route::get('/detailalbum/delete/{id}', [AlbumController::class, 'delete']);

    Route::post('/updatealbum/{id}', [AlbumController::class, 'updatealbum']);




    Route::get('/logout', [AuthController::class, 'logout']);


});

Route::post('/auth', [AuthController::class, 'auth']);








