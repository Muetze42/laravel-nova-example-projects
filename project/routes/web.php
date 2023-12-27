<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Laravel\Nova\Http\Controllers\LoginController;
use Laravel\Nova\Nova;

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

Route::get('/', HomeController::class);

Route::middleware(HandleInertiaRequests::class)->group(function () {
    Route::get('login', [AuthController::class, 'showLogin']);
    Route::post('login', [AuthController::class, 'login']);
});
Route::domain(config('nova.domain', null))
    ->middleware(config('nova.middleware', []))
    ->prefix(Nova::path())
    ->group(function (Router $router) {
        $router->post('logout', [LoginController::class, 'logout'])->name('custom.nova.logout');
    });
