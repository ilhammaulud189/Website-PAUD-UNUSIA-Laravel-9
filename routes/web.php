<?php

use App\Http\Controllers\GaleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentContoller;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/', [HomeController::class,'index',])
->name('home');

Route::get('galery', [GaleryController::class,'index'])
->name('galery');


/* route untuk fitur blog/postingan */
Route::resource('blog', BlogController::class);
Route::get('artikel', [BlogController::class,'blog'])
->name('blog');
Route::get('editpost/{id}/edit', [BlogController::class,'edit'])
->name('editpost');
Route::get('blogdetail/{id}', [BlogController::class,'show'])
->name('blogdetail');

/* route untuk fitur data pengajar */

Route::get('editlecturer/{id}/edit', [LecturerController::class,'edit'])
->name('editlecturer');
Route::get('detaillecturer', [LecturerController::class,'detail'])
->name('detaillecturer');
Route::get('createprodi', [LecturerController::class,'prodi'])
->name('createprodi');
Route::resource('lecturer', LecturerController::class);

/* route untuk fitur data mahasiswa */
Route::resource('Student', StudentContoller::class);
Route::get('student/{id}/edit', [StudentContoller::class,'edit']);
Route::put('student/{id}', [StudentContoller::class,'update']);

Route::resource('sponsor', SponsorController::class,);

Route::resource('testimoni', TestimoniController::class,);

   


/* route untuk fitur authentication 
Route::get('admin', [AdminController::class,'index'])
->middleware(['auth']);

Route::get('/admin', function () {
    return view ('pages.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); dokumentasi default*/



Route::get('/admin', function () {
    return view ('pages.admin');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('editlecture/{id}', [LecturerController::class,'update']);
    Route::delete('lecturer/{id}', [LecturerController::class,'destroy']);
    
    Route::get('lecturer', [LecturerController::class,'index'])->name('lecturer');
    Route::get('student', [StudentContoller::class,'index'])->name('mahasiswa');

    Route::get('blog', [BlogController::class,'index'])
    ->name('crudpost');
    Route::put('blog/{id}', [BlogController::class,'update']);
    Route::delete('blog/{id}', [BlogController::class,'destroy']);
    

    Route::get('sponsor', [SponsorController::class,'index'])
    ->name('sponsor');
    Route::get('testimoni', [TestimoniController::class,'index'])
    ->name('testimoni');
    Route::delete('testimoni/{id}', [TestimoniController::class,'destroy']);
    Route::put('testimoni/{id}', [TestimoniController::class,'update']);
    Route::get('edittestimoni/{id}/edit', [TestimoniController::class,'edit'])
     ->name('edittestimoni');

     Route::get('/admin', [AdminController::class,'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
