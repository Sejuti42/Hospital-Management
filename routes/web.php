<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\NewsController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/doctors',[HomeController::class,'doctors'])->name('doctors');
Route::get('/news',[HomeController::class,'news'])->name('news');
Route::get('/blog-details/{id}',[HomeController::class,'blogdetails'])->name('blog.details');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/add-appointment',[AppointmentController::class,'add'])->name('appointment.add');
Route::post('/create-appointment',[AppointmentController::class,'create'])->name('appointment.create');
Route::get('/myappointment',[AppointmentController::class,'myappointment'])->name('myappointment');

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function ()
{
    Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/add-doctor',[AdminController::class, 'add'])->name('doctor.add');
    Route::post('/create-doctor',[AdminController::class, 'create'])->name('doctor.create');
    Route::get('/manage-doctor',[AdminController::class, 'manage'])->name('doctor.manage');
    Route::get('/delete-doctor/{id}',[AdminController::class, 'delete'])->name('doctor.delete');
    Route::get('/edit-doctor/{id}',[AdminController::class, 'edit'])->name('doctor.edit');
    Route::post('/update-doctor/{id}',[AdminController::class, 'update'])->name('doctor.update');


    Route::get('/manage-appointments',[AdminController::class, 'manageappointments'])->name('manage.appointments');


    Route::get('/add-news',[NewsController::class, 'addnews'])->name('add.news');
    Route::post('/create-news',[NewsController::class, 'createnews'])->name('create.news');
    Route::get('/manage-news',[NewsController::class, 'managenews'])->name('manage.news');
    Route::get('/delete-news/{id}',[NewsController::class, 'deletenews'])->name('delete.news');
    Route::get('/edit-news/{id}',[NewsController::class, 'editnews'])->name('edit.news');
    Route::post('/update-news/{id}',[NewsController::class, 'updatenews'])->name('update.news');

});

