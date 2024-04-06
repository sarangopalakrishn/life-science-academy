<?php

use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {   //old
//     return view('welcome');
// });


Route::get('/', [HomepageController::class,'home'])->name('users.home');
Route::get('/contact', [HomepageController::class,'contact'])->name('users.contact');
Route::get('/team', [HomepageController::class,'team'])->name('users.team');
Route::get('/gallery', [HomepageController::class,'gallery'])->name('users.gallery');
Route::get('/video', [HomepageController::class,'video'])->name('users.video');
Route::get('/about', [HomepageController::class,'about'])->name('users.about');
Route::get('/courses', [HomepageController::class,'courses'])->name('users.courses');
Route::get('/events', [HomepageController::class,'events'])->name('users.events');
Route::get('/news', [HomepageController::class,'news'])->name('users.news');
Route::get('/privacy-policy', [HomepageController::class,'privacypolicy'])->name('users.privacy-policy');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pages/gallery',[GalleryController::class,'gallery'])->name('pages.gallery');
    Route::get('/pages/create',[GalleryController::class,'create'])->name('pages.create');
    Route::post('/pages/store',[GalleryController::class,'store'])->name('pages.store');
    Route::get('/pages/{id}/edit',[GalleryController::class,'edit'])->name('pages.edit');
    Route::put('/pages/{id}', [GalleryController::class,'update'])->name('pages.update');
    // Route::delete('/pages/{id}/destroy',[GalleryController::class,'destroy'])->name('pages.destroy');

    Route::get('/pages/video',[VideoController::class,'video'])->name('pages.video');
    Route::get('/pages/addvideo',[VideoController::class,'videocreate'])->name('pages.videocreate');
    Route::post('/pages/storevideo',[VideoController::class,'storevideo'])->name('pages.storevideo');
    // Route::delete('pages/video/{id}', [VideoController::class,'destroy'])->name('pages.video');
    // Route::delete('/pages/{id}/delete', [VideoController::class, 'delete'])->name('pages.video');
    // Route::delete('pages/video/{id}', 'VideoController@destroy')->name('pages.video.destroy');
    // Route::delete('/pages/delete/{id}',[GalleryController::class,'destroy'])->name('pages.destroy');
    Route::delete('/pages/destroy/{id}', [GalleryController::class, 'destroy'])->name('pages.destroy');

    Route::get('/pages/notification',[NotificationController::class,'notification'])->name('pages.notification');
});



Route::delete('/pages/delete/{id}',[VideoController::class,'delete'])->name('pages.delete');





require __DIR__.'/auth.php';
