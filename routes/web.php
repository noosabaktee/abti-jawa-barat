<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\BigNewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\NewsContentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewBigNewsController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\EditBigNewsController;
use Illuminate\Pagination\LengthAwarePaginator;


Route::get('/', function () {
    return view('/hero', [
        'page' => 'home'
    ]);
});
Route::get('/', [HeroController::class, 'index']); 


Route::resource('hero', HeroController::class)->only(['index', 'store']);

Route::resource('about', AboutController::class);
Route::resource('anggota', AnggotaController::class)
    ->parameters([
        'anggota' => 'anggota'
    ]);
Route::get('/archives', [ArchivesController::class, 'index'])->name('archives.index');
Route::get('/big-news', [BigNewsController::class, 'index'])->name('big_news.index');
Route::resource('big_news', BigNewsController::class);
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/hero', [HeroController::class, 'index'])->name('hero.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::resource('program-kerja', ProgramKerjaController::class);
Route::resource('news-content', NewsContentController::class);
Route::resource('sponsor', SponsorController::class);
Route::get('/viewBignews', [ViewBigNewsController::class, 'index'])->name('viewBignews.index');
Route::resource('kegiatan', KegiatanController::class);


