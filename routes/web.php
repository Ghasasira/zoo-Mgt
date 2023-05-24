<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Animals\EditAnimal;
use App\Http\Livewire\Animals\ShowAnimals;
use App\Http\Livewire\Employees\Employees;
use App\Http\Livewire\Animals\CreateAnimal;
use App\Http\Livewire\Gallerys\EditGallery;
use App\Http\Livewire\Gallerys\ShowGallery;
use App\Http\Livewire\Visitors\EditVisitor;
use App\Http\Livewire\Visitors\ShowVisitors;
use App\Http\Livewire\Employees\EditEmployee;
use App\Http\Livewire\Gallerys\CreateGallery;
use App\Http\Livewire\Visitors\CreateVisitor;
use App\Http\Livewire\Employees\CreateEmployee;

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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/tickets', function () {
    return view('landing.tickets');
});

Route::get('/about', function () {
    return view('landing.about');
});

Route::get('/animal', function () {
    return view('landing.animal');
});

Route::get('/contact', function () {
    return view('landing.contact');
});

Route::get('/membership', function () {
    return view('landing.membership');
});

Route::get('/service', function () {
    return view('landing.service');
});

Route::get('/testimonial', function () {
    return view('landing.testimonial');
});

Route::get('/visiting', function () {
    return view('landing.visiting');
});

Route::get('/404', function () {
    return view('landing.404');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/visitors', ShowVisitors::class)->name('visitors');
    Route::get('/visitors/add', CreateVisitor::class);
    Route::get('/visitors/edit/{visitor}', EditVisitor::class);


    Route::get('/employees', Employees::class)->name('employees');
    Route::get('/employees/add', CreateEmployee::class);
    Route::get('/employees/edit/{employee}', EditEmployee::class);

    Route::get('/zooanimal', ShowAnimals::class)->name('animals');
    Route::get('/animals', ShowAnimals::class)->name('animal.all');
    Route::get('/animals/add', CreateAnimal::class);
    Route::get('/animals/edit/{animal}', EditAnimal::class);

    Route::get('/gallerys', ShowGallery::class)->name('gallerys');
    Route::get('/gallerys/add', CreateGallery::class);
    Route::get('/gallerys/edit/{animal}', EditGallery::class);


});
