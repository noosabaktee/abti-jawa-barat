<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\BigNewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\NewsContentController;
use App\Http\Controllers\ProfileClubController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileHeroController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\ShortController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\ViewBigNewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome', [
        'page' => 'home'
    ]);
});

Route::resource('about', AboutController::class);
Route::resource('anggota', AnggotaController::class)
    ->parameters([
        'anggota' => 'anggota'
    ]);
Route::get('/big-news', [BigNewsController::class, 'index'])->name('big_news.index');
Route::resource('big_news', BigNewsController::class);
Route::resource('hero', HeroController::class)->only(['index', 'store']);
Route::resource('program-kerja', ProgramKerjaController::class);
Route::resource('news-content', NewsContentController::class);
Route::resource('event', EventController::class);
Route::post('/event-header', [EventController::class, 'updateHeader'])->name('event.header.update');
Route::resource('gallery', GalleryController::class);
Route::post('/gallery-header', [GalleryController::class, 'updateHeader'])->name('gallery.header.update');
Route::resource('profile', ProfileController::class);
Route::resource('profile-club', ProfileClubController::class);
Route::resource('profile-hero', ProfileHeroController::class);
Route::resource('sponsor', SponsorController::class);
Route::resource('archive', ArchivesController::class);
Route::post('/archive-header', [ArchivesController::class, 'updateHeader'])->name('archive.header.update');
Route::resource('short', ShortController::class);
Route::get('/viewBignews', [ViewBigNewsController::class, 'index'])->name('viewBignews.index');
Route::resource('kegiatan', KegiatanController::class);