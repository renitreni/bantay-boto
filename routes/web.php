<?php

use App\Http\Livewire\AboutPage;
use App\Http\Livewire\BlogCreate;
use App\Http\Livewire\BlogDetails;
use App\Http\Livewire\BlogEdit;
use App\Http\Livewire\BlogList;
use App\Http\Livewire\Blogs;
use App\Http\Livewire\Landing;
use App\Http\Livewire\PermissionEdit;
use App\Http\Livewire\RoleCreate;
use App\Http\Livewire\RoleEdit;
use App\Http\Livewire\Roles;
use App\Http\Livewire\UserCreate;
use App\Http\Livewire\UserEdit;
use App\Http\Livewire\UserForm;
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

Route::get('/', Landing::class)->name('home');
Route::get('/bbm/{id}/{year}/{slug}', BlogDetails::class)->name('blog.details');
Route::get('/about', AboutPage::class)->name('home.about');
Route::get('/blog-list', BlogList::class)->name('home.blog');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', fn() => view('dashboard'))->name('dashboard');
    });
    Route::prefix('blogs')->group(function () {
        Route::get('/', Blogs::class)->name('blogs');
        Route::get('/create', BlogCreate::class)->name('blog.create');
        Route::get('/edit/{id}', BlogEdit::class)->name('blog.edit');
    });
    Route::prefix('manage-users')->group(function () {
        Route::get('/users', fn() => view('users'))->name('users');
        Route::get('/user/edit/{user}', UserEdit::class)->name('user.edit');
        Route::get('/user/create', UserCreate::class)->name('user.create');
    });
    Route::prefix('roles')->group(function () {
        Route::get('/', Roles::class)->name('roles');
        Route::get('/edit/{role}', RoleEdit::class)->name('role.edit');
        Route::get('/create', RoleCreate::class)->name('role.create');
    });
    Route::prefix('permissions')->group(function () {
        Route::get('/edit/{role}', PermissionEdit::class)->name('permission.edit');
    });
});
