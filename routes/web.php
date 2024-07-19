<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('uploadform');
});

Route::post('/uploadform', [ImageController::class, 'upload']);

Route::get('/viewupload', function(){
    $size = Storage::size('/public/uploads/file.png');
    $data = compact('size');
    return view('viewupload') -> with($data);
});

