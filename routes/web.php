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
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/archives', [ArchivesController::class, 'index'])->name('archives.index');
Route::get('/big-news', [BigNewsController::class, 'index'])->name('big_news.index');
Route::delete('/big-news/{id}', [BigNewsController::class, 'destroy'])->name('big_news.destroy');
Route::resource('big_news', BigNewsController::class);
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/hero', [HeroController::class, 'index'])->name('hero.index');
Route::get('/news-content', [NewsContentController::class, 'index'])->name('news_content.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/program-kerja', [ProgramKerjaController::class, 'index'])->name('program_kerja.index');
Route::get('/sponsor', [SponsorController::class, 'index'])->name('sponsor.index');
Route::get('/viewBignews', [ViewBigNewsController::class, 'index'])->name('viewBignews.index');
Route::get('/editBignews', [EditBigNewsController::class, 'index'])->name('editBignews.index');
Route::resource('kegiatan', KegiatanController::class); 


