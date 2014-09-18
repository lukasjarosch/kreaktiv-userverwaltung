<?php

class LoginController extends BaseController {

	/**
	 * GET
	 *
	 * Handles a GET request on '/login'
	 * Displays the login form
	 */
	public function getLogin()
	{
		return View::make('pages.login');
	}

	/**
	 * POST
	 *
	 * Handles a POST request on '/login'
	 * Validates the submitted form and prints errors if needed
	 *
	 * @todo: Finish validation once the DB is setup
	 */
	public function postLogin() {

		// Define the validation rules
		$rules = array(
			'username'		=> 'required',
			'password'		=> 'required|min:8'
		);

		$validator = Validator::make(Input::all(), $rules);

		// Validation fails => Display errors
		if($validator->fails()) {
			$messages = $validator->messages();

			return Redirect::to('login')->withErrors($validator);

		} else {
			// Validation successfull, create user model and goto home
			
			return Redirect::to('/');
		}
		
	}

}
