<?php

use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
    Route::resource('blog', BlogController::class);
});

// Route::get('/sentry-log-test', function () {
//    Log::channel('sentry_logs')->error('HTTP Sentry log test');
//
//    return 'Done';
// });

require __DIR__.'/settings.php';
