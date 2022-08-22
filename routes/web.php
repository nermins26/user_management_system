<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

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

//Because of implementation of resource routes for users
Route::get('/', function () {
    return redirect(route('users.index'));
})->name('home');

//order users list
Route::get('/order/query', [SearchController::class, 'orderQuery'])->name('order');

//search users by keyword
Route::get('/search/query', [SearchController::class, 'searchQuery'])->name('search');

//filter users by role
Route::get('/filter/role/query', [SearchController::class, 'filterByRole'])->name('filter.role');

//did not make it to implement this type of filter
// Route::get('/filter/permission/query', [SearchController::class, 'filterByPerms'])->name('filter.permission');


//for users CRUD operations
Route::resource(
    'users', UserController::class
);


//simple group for role management
Route::prefix('role')->name('role.')->group(function() {
    Route::get('/assign/{user}', [RoleController::class, 'showAssignRole'])->name('show.assign');

    Route::put('/assign/{user}', [RoleController::class, 'assignRole'])->name('assign');
});


//simple group for permissions management
Route::prefix('permission')->name('perms.')->group(function() {
    Route::get('/assign/{role}', [PermissionController::class, 'showAssignPerms'])->name('show.assign');

    Route::patch('/assign/{role}', [PermissionController::class, 'assignPerms'])->name('assign');
});






