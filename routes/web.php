<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\SocialAccountController as AdminSocialAccountController;
use App\Http\Controllers\Admin\SocialProviderController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialAccountController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectOnFirstLoginMiddleware;
use Illuminate\Support\Facades\Route;

// Always available
Route::post('proxy', [HomeController::class, 'proxy'])->name('proxy');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Authenticated routes
Route::middleware('auth:sanctum')->group(function () {

    Route::get('login/signup', [UserController::class, 'signup'])->name('login.signup');
    Route::match(['PUT', 'PATCH'], 'login/signup', [UserController::class, 'signup_process'])->name('login.signup.process');

    Route::middleware(RedirectOnFirstLoginMiddleware::class)->group(function () {

        Route::get('/', [HomeController::class, 'home'])->name('home');

        Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
        Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.profile.edit');
        Route::match(['PATCH', 'PUT'], '/profile', [UserController::class, 'update'])->name('user.profile.update');

        Route::get('/profile/accounts/{socialprovider:code}/link', [SocialAccountController::class, 'create'])->name('socialaccounts.create');
        Route::get('/profile/accounts/{socialprovider:code}/return', [SocialAccountController::class, 'store'])->name('socialaccounts.store');

        Route::middleware('can:update,socialaccount')->group(function () {
            Route::get('/profile/accounts/{socialaccount}/delete', [SocialAccountController::class, 'store'])->name('socialaccounts.delete');
            Route::delete('/profile/accounts/{socialaccount}', [SocialAccountController::class, 'store'])->name('socialaccounts.destroy');
        });

        Route::get('/admin/unimpersonate', [AdminHomeController::class, 'unimpersonate'])->name('admin.unimpersonate');

        Route::middleware('can:admin')->name('admin.')->prefix('admin')->group(function () {
            Route::get('/', [AdminHomeController::class, 'dashboard'])->name('dashboard');

            Route::resource('users', AdminUserController::class);
            Route::get('users/{user}/delete', [AdminUserController::class, 'delete'])->name('users.delete');
            Route::get('users/{user}/impersonate', [AdminUserController::class, 'impersonate'])->name('users.impersonate');
            Route::get('users/{user}/sync', [AdminUserController::class, 'sync_tickets'])->name('users.sync');

            Route::get('users/{user}/accounts/{account}', [AdminSocialAccountController::class, 'delete'])->name('users.socialaccounts.delete')->scopeBindings();
            Route::delete('users/{user}/accounts/{account}', [AdminSocialAccountController::class, 'destroy'])->name('users.socialaccounts.destroy')->scopeBindings();

            Route::get('settings', [AdminSettingController::class, 'index'])->name('settings.index');
            Route::match(['PUT', 'PATCH'], 'settings', [AdminSettingController::class, 'update'])->name('settings.update');
            Route::get('settings/socialproviders/{provider}/edit', [SocialProviderController::class, 'edit'])->name('settings.socialproviders.edit');
            Route::match(['PUT', 'PATCH'], 'settings/socialproviders/{provider}', [SocialProviderController::class, 'update'])->name('settings.socialproviders.update');

            Route::prefix('settings')->name('settings.')->group(function() {
                Route::resource('themes', ThemeController::class)->except(['index', 'show']);
                Route::get('themes/{theme}/delete', [ThemeController::class, 'delete'])->name('themes.delete');
            });
        });
    });
});

// Guest-only routes
Route::middleware('guest')->group(function () {
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::get('login/{socialprovider:code}', [UserController::class, 'login_redirect'])->name('login.redirect');
    Route::get('login/{socialprovider:code}/return', [UserController::class, 'login_return'])->name('login.return');
});

