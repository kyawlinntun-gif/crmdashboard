<?php

use App\Http\Resources\TodayResource;
use App\Models\Upcoming;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UpcomingResource;
use App\Models\Today;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* ---------- Start of Upcoming ---------- */

// Get All
Route::get('/upcoming', function () {
    $upcomings = Upcoming::all();
    return UpcomingResource::collection($upcomings);
});

// Create One
Route::post('/upcoming', function (Request $request) {
    $taskId = Str::random(10);
    $upcoming = Upcoming::create(['title' => $request->title, 'completed' => $request->completed, 'approved' => $request->approved, 'waiting' => $request->waiting, 'taskId' => $taskId]);

    return $upcoming;
});

// Delete One
Route::delete('/upcoming/{taskId}', function ($taskId) {
    DB::delete('delete from upcomings where taskId = ?', [$taskId]);

    return 204;
});

/* ---------- End of Upcoming ---------- */

/* ---------- Start of Today ---------- */

// Get All
Route::get('/today', function() {
    $todays = Today::all();

    return TodayResource::collection($todays);
});

// Create One
Route::post('/today', function(Request $request) {
    $taskId = Str::random(10);
    $today = Today::create(['title' => $request->title, 'completed' => $request->completed, 'approved' => $request->approved, 'taskId' => $taskId]);

    return $today;
});

// Delete One
Route::delete('/today/{taskId}', function($taskId) {
    DB::delete('delete from todays where taskId = ?', [$taskId]);

    return 204;
});

/* ---------- End of Today ---------- */
