<?php

class PageController extends BaseController {



	public function apache()
	{
		return View::make('writings.apache-setup');
	}

	public function wd101()
	{
		return View::make('writings.wd101');
	}

	public function wd101slides()
	{
		return View::make('slides.wd101');
	}

	public function nlp()
	{
		return View::make('slides.nlp');
	}

}
