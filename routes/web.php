<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AnswersController;
use App\Http\Controllers\admin\QuestionsController;
use App\Http\Controllers\home\CommentController;
use App\Http\Controllers\home\PeriodeController;
use App\Http\Controllers\home\ServiceController;
use App\Http\Controllers\home\SurveysController;
use App\Http\Controllers\ProfileController;
use App\Models\Comment;
use App\Models\Periode;
use App\Models\Surveys;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index', [
        'surveys' => Surveys::all(),
        'periode' => Periode::all(),
        'comments' => Comment::all()
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
// Dashboard
Route::middleware('auth')->group(function () {
    // Profile
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admin.index');
        Route::get('/logout', 'logout')->name('admin.logout');
        Route::get('/admin/dashboard/profile/edit', 'edit')->name('admin.edit');
        Route::post('/admin/dashboard/profile/update', 'update')->name('admin.update');
        Route::post('/admin/dashboard/profile/update/updatepassword', 'updatepass')->name('admin.updatepass');
    });
    Route::controller(QuestionsController::class)->group(function () {
        Route::get('/admin/questions', 'index')->name('all.questions');
        Route::get('/admin/questions/add', 'create')->name('add.questions');
        Route::post('/admin/questions/save', 'store')->name('store.questions');
        Route::get('/admin/questions/edit/{id}', 'edit')->name('edit.questions');
        Route::post('/admin/questions/update/', 'update')->name('update.questions');
        Route::get('/admin/questions/delete/{id}', 'destroy')->name('delete.questions');
    });
    Route::controller(AnswersController::class)->group(function () {
        Route::get('/admin/answers', 'index')->name('all.answers');
        Route::get('/admin/answers/add', 'create')->name('add.answers');
        Route::post('/admin/answers/save', 'store')->name('store.answers');
        Route::get('/admin/answers/edit/{id}', 'edit')->name('edit.answers');
        Route::post('/admin/answers/update/', 'update')->name('update.answers');
        Route::get('/admin/answers/delete/{id}', 'destroy')->name('delete.answers');
    });
    Route::controller(PeriodeController::class)->group(function () {
        Route::get('/admin/periode', 'index')->name('all.periode');
        Route::get('/admin/periode/add', 'create')->name('add.periode');
        Route::post('/admin/periode/save', 'store')->name('store.periode');
        Route::get('/admin/periode/edit/{id}', 'edit')->name('edit.periode');
        Route::post('/admin/periode/update/', 'update')->name('update.periode');
        Route::get('/admin/periode/delete/{id}', 'destroy')->name('delete.periode');
    });
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/admin/services', 'index')->name('all.services');
        Route::get('/admin/services/add', 'create')->name('add.services');
        Route::post('/admin/services/save', 'store')->name('store.services');
        Route::get('/admin/services/edit/{id}', 'edit')->name('edit.services');
        Route::post('/admin/services/update/', 'update')->name('update.services');
        Route::get('/admin/services/delete/{id}', 'destroy')->name('delete.services');
    });
    Route::controller(CommentController::class)->group(function () {
        Route::get('/admin/comments', 'allcomments')->name('all.comments');
        Route::get('/admin/comments/delete/{id}', 'destroy')->name('delete.comments');
    });
});


Route::controller(SurveysController::class)->group(function () {
    Route::get('/survey', 'index')->name('start.survey');
    Route::post('/survey/add', 'store')->name('store.survey');
});
Route::controller(CommentController::class)->group(function () {
    Route::get('/comment', 'index')->name('start.comment');
    Route::post('/comment/add', 'store')->name('store.comment');
});


require __DIR__ . '/auth.php';
