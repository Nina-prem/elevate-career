<?php

use App\Http\Controllers\LayOutController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Questions
Route::get('questions/index', [QuestionController::class, 'index'])
    ->name('questions.index');

Route::get('questions/create', [QuestionController::class, 'create'])
    ->name('questions.create');

Route::post('questions/create', [QuestionController::class, 'store'])
    ->name('questions.store');

// Edit / Update / Delete
Route::get('questions/{question}/edit', [QuestionController::class, 'edit'])
    ->name('questions.edit');

Route::put('questions/{question}', [QuestionController::class, 'update'])
    ->name('questions.update');

Route::delete('questions/{question}', [QuestionController::class, 'destroy'])
    ->name('questions.destroy');

// Category
Route::get('questions/category/{type}', [QuestionController::class, 'category'])
    ->name('questions.category');

// Layout
Route::get('questions/layOut', [LayOutController::class, 'show'])
    ->name('questions.layOut');
    Route::post('questions/layOut', [LayoutController::class, 'store'])
    ->name('questions.layOut');

Route::get('questions/html',[LayOutController::class,'html'])->name('questions.html');
Route::get('questions/java',[LayOutController::class,'shows'])->name('questions.java');

Route::get('questions/laravels',[LayOutController::class,'view'])->name('questions.laravels');
Route::get('questions/php',[LayOutController::class,'showing'])->name('questions.php');
Route::get('questions/interview',[LayOutController::class,'interview'])->name('questions.interview');
