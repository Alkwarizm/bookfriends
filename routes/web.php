<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::get('workflows', function () {
    return view('create');
});

Route::get('workflow', function () {
    return view('workflow');
});

Route::post('workflow', function (Request $request) {
    dd($request->all());
});

Route::get('members', function () {
   dump('Members only');
})->middleware([\App\Http\Middleware\RedirectIfMember::class]);

Route::prefix('feature')
    ->group(function () {
        Route::get('/', function () {
            return view('feature.index');
        });
    });

Route::view('image-finder', 'image-finder');
Route::view('marked-down-parser', 'marked-down');

Route::view('events', 'events');

Route::post('workflows', [\App\Http\Controllers\WorkflowController::class, 'store']);

Route::get('dispatch-job', function () {
    $user = \App\Models\User::query()->latest()->first();

    \App\Jobs\SendVerificationMessage::dispatch($user)
        ->delay(2);
});

Route::get('process-payment', function () {
    $payment = \App\Models\Payment::factory()->create();

    \App\Jobs\ProcessPayment::dispatch($payment);

    dd('dispatched');
});
