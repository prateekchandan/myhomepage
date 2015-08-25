<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
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

Route::get('/how-to-setup-localhost',array('as'=>'write.apache','uses'=>'PageController@apache'));
Route::get('/wd101',array('as'=>'write.wd101','uses'=>'PageController@wd101'));
Route::get('/wd101-slides',array('as'=>'wd101-slides','uses'=>'PageController@wd101slides'));
Route::get('/sudoku',array('as'=>'sudoku','uses'=>'PageController@sudoku'));

Route::get('/english-to-sql',array('as'=>'cs626','uses'=>'PageController@nlp'));
