<?php

class UserController
	extends Controller
	{
		public function login()
		{
			if ($this->isPostRequest()) 
			{
				// dd("KEREN");
				$validator = $this->getLoginValidator();

				if ($validator->passes()) 
				{
					// dd("KEREN");
					$credentials = $this->getLoginCredentials();
					//dd($credentials);
					if (Auth::attempt($credentials)) 
					{
						return Redirect::route("home");
						// dd("KEREN");
					}
					else
					{	
						return Redirect::back()->withErrors(
							[
								"password" => ["Credentials invalid."]
							]);
					}		 
				}
			// 	else 
			// 	{
			// 		return Redirect::back()
			// 		->withInput()
			// 		->withErrors($validator);
			// 	}
			}

		return View::make("users/login");
		}

protected function isPostRequest()
{
return Input::server("REQUEST_METHOD") == "POST";
}

protected function getLoginValidator()
{
return Validator::make(Input::all(), [
"username" => "required",
"password" => "required"
]);
}

protected function getLoginCredentials()
{
return [
"username" => Input::get("username"),
"password" => Input::get("password")
];
}


public function logout()
{
	Auth::logout();
	return Redirect::route("user/login");
}
}