<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) -> name('welcome');

Route::get('/library', function () {
    return view('library.index');
}) -> name('library.index');

Route::get('/library/show', function () {
    return view('library.show');
}) -> name('library.show');

Route::get('/library/show/soal', function () {
    return view('library.show-soal');
}) -> name('library.show-soal');

Route::get('/library/show/soal/koreksi', function () {
    return view('library.show-koreksi');
}) -> name('library.show-koreksi');

Route::get('/leaderboard', function () {
    return view('leaderboard.index');
}) -> name('leaderboard.index');

Route::get('/event', function () {
    return view('event.index');
}) -> name('event.index');

Route::get('/event/show', function () {
    return view('event.show');
}) -> name('event.show');
