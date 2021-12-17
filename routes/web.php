<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

//入力ページ
Route::get('/contact', [ContactController::class,'index'])->name('contact.index');

//確認ページ
Route::get('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

//送信完了ページ
Route::post('/contact/thanks', [ContactController::class, 'send'])->name('contact.send');