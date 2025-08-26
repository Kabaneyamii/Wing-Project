<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\FollowersController;
use App\Http\Controllers\PasswordController;

use App\Http\Controllers\NotificationController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/posts/thread', [PostController::class, 'view']);
Route::get('/login', [LoginController::class, 'create']);
Route::get('/register', [RegisterController::class, 'create']);
Route::get('/create-post', [PostController::class, 'create']);
Route::get('/profile/{username}', [ProfileController::class, 'show']);
Route::get('/profile/{username}/replies', [ProfileController::class, 'replies']);
Route::get('/profile/{username}/likes', [ProfileController::class, 'likes']);
Route::get('/settings', [SettingsController::class, 'index']);
Route::get('/bookmarks', [BookmarkController::class, 'index']);
Route::get('/following', [FollowingController::class, 'index']);
Route::get('/followers', [FollowersController::class, 'index']);
Route::get('/password', [PasswordController::class, 'index'])->name('change-password');
Route::post('/password', [PasswordController::class, 'update'])->name('change-password.update');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');




Route::get('/details', function () {
    return view('settings.details');
})->name('details');


Route::get('/terms', function () {
    return view('settings.terms');
});





