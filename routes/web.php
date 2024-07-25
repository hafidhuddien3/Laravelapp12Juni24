<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;
use App\Http\Controllers\NewPageController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MailController;

use App\Http\Middleware\VerifyCsrfToken;

use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/new-page', [NewPageController::class, 'index']);

Route::get('/api/getData', [YourController::class, 'getData']);

Route::get('sendtxtmail','MailController@txt_mail');
Route::get('sendhtmlmail','MailController@html_mail');
Route::get('sendattachedemail','MailController@attached_email');

Route::get('/sendemail1', [MailController::class, 'sendEmail']);
Route::get('/sendemail2', [MailController::class, 'sendComplexEmail'])->name('sendemail2');

Route::post('/upload', [ImageUploadController::class, 'uploadImage'])->name('upload.image');
Route::post('/submit', [FormController::class, 'submitForm'])->name('submit.form')->middleware(VerifyCsrfToken::class);

Route::get('/generate-pdf', [PdfController::class, 'generatePDF'])->name('generate.pdf');
Route::get('/generate-pdf2', [PdfController::class, 'generatePDF2'])->name('generate2.pdf');


// Route::get('/profile', function () {
//     // ...
// })->middleware(VerifyCsrfToken::class);