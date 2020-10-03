<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function()
{
	$quotes=["Whatever the mind of man can conceive and believe, it can achieve. –Napoleon Hill",
	"Don't expect, you will never be disappointed -Me",
	"You miss 100% of the shots you don’t take. –Wayne Gretzky",
	"Your time is limited, so don’t waste it living someone else’s life. –Steve Jobs"];
	shuffle($quotes);
	View::share('quote',$quotes[0]);
	return View::make('home');
});

Route::get('/how-to-setup-localhost', [PageController::class ,'apache'])->name('write.apache');
Route::get('/wd101', [PageController::class ,'wd101'])->name('write.wd101');
Route::get('/wd101-slides', [PageController::class ,'wd101slides'])->name('wd101-slides');
Route::get('/sudoku', [PageController::class ,'sudoku'])->name('sudoku');
Route::get('/english-to-sql', [PageController::class ,'nlp'])->name('cs626');
