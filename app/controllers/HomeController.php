<?php

class HomeController extends BaseController {
	public function index() {
		$teachers = Teacher::all();
		return View::make('hello')
			->with('teachers', $teachers);
	}
}
