<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SurveyController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('pages', PageController::class);
Route::get('survey-creator', [SurveyController::class, 'index'])->name('survey.creator');

