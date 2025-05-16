<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\SearchController;
use App\Http\Livewire\Video\AllVideo;
use App\Http\Livewire\Video\CreateVideo;
use App\Http\Livewire\Video\EditVideo;
use App\Http\Livewire\Video\WatchVideo;
use App\Models\Channel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // if logged in -- channels that I subscribed to
    if (Auth::check()) {
        $channels = Auth::user()->subscribedChannels()->with('videos')->get()->pluck('videos');
    } else {
        //else all vidoes
        $channels = Channel::get()->pluck('videos');
    }

    return view('welcome', compact('channels'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {

    Route::get('/channel/{channel}/edit', [ChannelController::class, 'edit'])->name('channel.edit');
});


Route::middleware('auth')->group(function () {

    Route::get('/videos/{channel}/create', CreateVideo::class)->name('video.create');
    Route::get('/videos/{channel}/{video}/edit', EditVideo::class)->name('video.edit');
    Route::get('/videos/{channel}', AllVideo::class)->name('video.all');
});


Route::get('/watch/{video}', WatchVideo::class)->name('video.watch');
Route::get('/channels/{channel}', [ChannelController::class, 'index'])->name('channel.index');
Route::get('/search/', [SearchController::class, 'search'])->name('search');
