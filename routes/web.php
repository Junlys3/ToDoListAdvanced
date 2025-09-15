<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\taskcontroller;
use Illuminate\Support\Facades\Route;
use App\Livewire\TaskManager;


route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('/task', taskcontroller::class)->name('index', 'tasks.index')->middleware('auth');




Route::get('/register', function () {
    return view('login.register');
})->name('register.index');
Route::post('/register', [logincontroller::class, 'register'])->name('register');



Route::get('/login', function () {
    return view('login.login');
})->name('login.index');
Route::post('/login', [logincontroller::class, 'login'])->name('login');
   


