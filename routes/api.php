<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Event;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/events', function () {
  $events = Event::all();
  return response()->json($events);
});

Route::post('/events', function (Request $request) {
  $event = Event::create($request->all());
  return response()->json($event);
});
