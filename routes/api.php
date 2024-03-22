<?php

use Illuminate\Support\Facades\Route;
use Wame\LaravelNovaMenuSwitcher\Http\Controllers\MenuSwitcherController;

Route::post('form-submit', [MenuSwitcherController::class, 'formSubmit'])->name('menu-switcher.form-submit');
