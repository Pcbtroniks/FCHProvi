<?php

use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');

Route::get('installations', [FrontController::class, 'installations'])->name('installations');

Route::get('rooms', [FrontController::class, 'rooms'])->name('rooms');

Route::get('visit', [FrontController::class, 'visit'])->name('visit');

Route::get('services', [FrontController::class, 'services'])->name('services');

Route::get('contact', [FrontController::class, 'contact'])->name('contact');

Route::post('contact', [ContactController::class, 'sendContactEmail'])->name('contact.send');

Route::get('event-contact', [FrontController::class, 'eventContact'])->name('event.contact');

Route::post('event-contact', [ContactController::class, 'sendEventContactEmail'])->name('event.contact.send');

Route::get('restaurant-los-alcatraces-menu', [FrontController::class, 'restaurantMenu'])->name('restaurantMenu');

Route::get('rengin-direct-booking', function(){
    return redirect()->route('contact');
})->name('rengin.direct-booking');