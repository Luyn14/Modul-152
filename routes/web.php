<?php

use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

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
    return view('welcome');
});

Route::get(
    '/welcome',
    [UserController::class, 'login']
);

Route::get(
    '/home',
    [UserController::class, 'logged'],
);

Route::get(
    '/profil',
    [UserController::class, 'profil'],
)->middleware(['auth']);


Route::get('/register', [RegisterController::class, 'detail']);

Route::get('/add_image', function () {
    return view('add_image');
})->middleware(['auth']);

//For adding an image
Route::get('/add-image', [AlbumsController::class, 'addImage'])->name('images.add')->middleware(['auth']);

//For adding an Album
Route::get('/add-album', [AlbumsController::class, 'addAlbum'])->name('albums.add')->middleware(['auth']);

//For storing an image
Route::post('/store-image', [AlbumsController::class, 'storeImage'])
    ->name('images.store');

//For storing an Album
Route::post('/store-album', [AlbumsController::class, 'storeAlbum'])
    ->name('albums.store');

//For editing an Album
Route::post('/edit-album', [AlbumsController::class, 'updateAlbum'])
    ->name('albums.edit');

//For showing an image
Route::get('/view-image', [AlbumsController::class, 'viewImage']);

Route::get(
    'edit_image/{imageId}',
    [AlbumsController::class, 'editImage'],
)->middleware(
    ['auth', 'deleteImage:imageUserId']
);

Route::post(
    'edit_image/{imageId}',
    [AlbumsController::class, 'updateImage'],
)->middleware(
    ['auth', 'deleteImage:imageUserId']
);

Route::delete(
    'delete_image/{imageId}',
    [AlbumsController::class, 'deleteImage'],
)->middleware(['auth', 'deleteImage:imageUserId']);

Route::get(
    'view_album/{albumId}',
    [AlbumsController::class, 'viewAlbum']
);

Route::get(
    'edit_album/{albumId}',
    [AlbumsController::class, 'editAlbum'],
)->middleware(
    ['auth', 'deleteAlbum:albumUserId']
);

Route::put(
    'edit_album/{albumId}',
    [AlbumsController::class, 'updateAlbum'],
)->middleware(
    ['auth', 'deleteAlbum:albumUserId']
);

Route::delete(
    'delete_album/{albumId}',
    [AlbumsController::class, 'deleteAlbum'],
)->middleware(
    ['auth', 'deleteAlbum:albumUserId']
);


Route::get(
    'edit_user/{userId}',
    [UserController::class, 'editUser'],
)->middleware(
    ['auth', 'admin']
);

Route::post(
    'edit_user/{userId}',
    [UserController::class, 'updateUser'],
)->middleware(
    ['auth', 'admin']
);

Route::delete(
    'delete_user/{userId}',
    [UserController::class, 'deleteUser'],
)->middleware(
    ['auth', 'admin']
);


Route::get(
    '/admin',
    [UserController::class, 'admin'],
)->middleware(['auth', 'admin']);
