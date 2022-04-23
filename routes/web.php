<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
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

Route::get('/', function () {
    return view('welcome');
});

// API
Route::get('/api/getContacts', [ApiController::class, 'getContacts']);

// FRONTEND
Route::get('/home', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/faq', [FrontController::class, 'faq']);
Route::get('/blog', [FrontController::class, ('blog')]);
Route::get('/blog/{id}', [FrontController::class, 'blogDetail']);
Route::get('/references', [FrontController::class, 'references']);
Route::get('/references/{id}', [FrontController::class, 'referenceDetail']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::post('/contact/save', [FrontController::class, 'saveContact']);
Route::get('/projects', [FrontController::class, 'projects']);
Route::get('/project/{id}', [FrontController::class, 'projectDetail']);
//servis sayfası

// BACKEND

Route::get('/back', [BackController::class, 'index']);

        //POSTS
Route::get('/back/post', [BackController::class, 'post']);
Route::get('back/post/add', [BackController::class, 'add']);
Route::post('back/post/save', [BackController::class, 'save']);
Route::get('back/post/update/{id}', [BackController::class, 'edit']);
Route::post('back/post/update/save', [BackController::class, 'postUpdate']);
Route::delete('back/post/delete/{id}', [BackController::class, 'delete']);


        //REFENCES
Route::get('/back/reference', [BackController::class, 'reference']);
Route::get('/back/reference/add', [BackController::class, 'addReference']);
Route::post('back/reference/save', [BackController::class, 'saveReference']);
Route::get('back/reference/update/{id}', [BackController::class, 'editReference']);
Route::post('back/reference/update/save', [BackController::class, 'updateReference']);
Route::delete('back/reference/delete/{id}', [BackController::class, 'deleteReference']);

        //CATEGORIES
Route::get('/back/categories', [BackController::class, 'categories']);
Route::post('/back/categories/save', [BackController::class, 'saveCategory']);

        //CONTACT
Route::get('/back/contact', [BackController::class, 'contact']);
Route::get('/back/contact/edit/{id}', [BackController::class, 'editContact']);
Route::post('back/contact/save', [BackController::class, 'saveContact']);