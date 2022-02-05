<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ScreenController;
use App\Models\About;
use App\Models\Slider;
use App\Models\Screen;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/*
 * Website User
 */
//Route::resource('serve',ServeController::class);
Route::get('/', function () {
    $about = About::first();
    $slider = Slider::first();
    $screen = Screen::first();
    return view('layouts.website.master',compact('about','slider','screen'));
})->name('serve');
/*
 * Routing Website
 */
Route::get('serve',[ServeController::class,'index'])->name('serve.index');
Route::post('serve/store',[ServeController::class,'store'])->name('serve.store');
Route::get('serve/update/{id}',[ServeController::class,'update'])->name('serve.update');
Route::post('serve/destroy',[ServeController::class,'destroy'])->name('serve.destroy');
/*
 * Dashboard Admin
 */
Route::get('/admin_dashboard', function () {
    return view('layouts.serve.admin_dashboard');
})->middleware(['auth'])->name('admin_dashboard');

//Route::resource('slider',SliderController::class);
Route::get('slider',[SliderController::class,'index'])->name('slider.index');
Route::post('slider/{id}',[SliderController::class,'update'])->name('slider.update');

//Route::resource('about',AboutController::class);
Route::get('about',[AboutController::class,'index'])->name('about.index');
Route::post('about/{id}',[AboutController::class,'update'])->name('about.update');


//Route::resource('screen',AboutController::class);
Route::get('screen',[ScreenController::class,'index'])->name('screen.index');
Route::post('screen/{id}',[ScreenController::class,'update'])->name('screen.update');

require __DIR__.'/auth.php';
