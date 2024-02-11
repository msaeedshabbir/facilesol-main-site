<?php

use App\Http\Controllers\backend\AdminFaqsController;
use Illuminate\Support\Facades\Route;

// Frontend Controllers
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ProjectsController;
use App\Http\Controllers\frontend\FaqsController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\POSDetailsController;

//Backend Controllers
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\TeamMemberController;

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

// Frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/faqs', [FaqsController::class, 'index']);
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/pos', [POSDetailsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submitMessage']);


// Route::get('/admins', function () {
//     $admins = Admins::all();
//     echo "<pre>";
//     print_r($admins->toArray());

// });

// Backend
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::get('/admin', [AdminHomeController::class, 'index']);

Route::get('/admin/register', [AdminHomeController::class, 'registerAdmin'])->name('admin.create');
Route::post('/admin/register', [AdminHomeController::class, 'submitAdminRecord']);
Route::get('/admin/admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('admin.show');
Route::get('/admin/delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('admin.delete');
Route::get('/admin/edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('admin.edit');
Route::get('/admin/update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('admin.update');


// Team Management
Route::get('/admin/team', [TeamMemberController::class, 'index'])->name('team.show');
Route::get('/admin/team-member-details/{id}', [TeamMemberController::class, 'showTeamMember'])->name('team.details');
Route::get('/admin/team-add', [TeamMemberController::class, 'registerTeam'])->name('team.add');
Route::post('/admin/team-add', [TeamMemberController::class, 'submitTeamRecord']);
Route::get('/admin/team-edit/{id}', [TeamMemberController::class, 'editTeam'])->name('team.edit');
Route::put('/admin/team-edit/{id}', [TeamMemberController::class, 'updateTeam'])->name('team.update');
// Route::get('/admin/team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('team.delete');
Route::delete('/admin/team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('team.delete');

// FAQs Management
Route::get('/admin/faqs', [AdminFaqsController::class, 'index'])->name('faq.show');
Route::get('/admin/faq-add', [AdminFaqsController::class, 'addFAQ'])->name('faq.add');
Route::post('/admin/faq-add', [AdminFaqsController::class, 'submitFaqRecord']);
