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

}
