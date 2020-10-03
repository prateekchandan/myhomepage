<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function apache()
	{
		return view('writings.apache-setup');
	}

	public function wd101()
	{
		return view('writings.wd101');
	}

	public function wd101slides()
	{
		return view('slides.wd101');
	}

	public function nlp()
	{
		return view('slides.nlp');
	}

	public function sudoku()
	{
		return view('other.sudoku');
	}
}
