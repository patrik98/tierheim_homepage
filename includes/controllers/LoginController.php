<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class LoginController extends Controller
{
	protected $viewFileName = "login"; //this will be the View that gets the data...
	protected $loginRequired = false;


	public function run()
	{
		$this->view->title = 'Login';

		//var_dump($this->view);

		if($this->user->isLoggedIn)
		{
			$this->user->redirectToIndex();
		}

		$this->checkForLoginPost();
		$this->checkForRegisterPost();
	}

	private function checkForLoginPost()
	{
		if(!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'login')
		{
			//probably a login attempt!

			$username = $_POST['email2'];
			$password = $_POST['pwd2'];

			if($username != "" && $password != "")
			{
				if($this->user->login($username, $password))
				{
					//$this->user->redirectToIndex();

                    $json = new JSON();

                    $json->result = true;
                    $json->setDat(array('urlToRedirectTo' => URL_PATH.'/'.INDEX_URL));
                    $json->send();
				}
				else
				{
					//$this->view->errorPasswd = true;

                    $json = new JSON();

                    $json->result = false;
                    $json->setData(array('errorFields' =>  array('email2', 'pwd2')));
                    $json->send();

				}
			}

		}
	}

	private function checkForRegisterPost()
	{
		if(!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'register')
		{
			$requiredFields = array('name', 'pwd', 'pwd2');

			$error = false;
			$errorFields = array();

			foreach($requiredFields as $fieldName)
			{
				if(!isset($_POST[$fieldName]) || $_POST[$fieldName] == '')
				{
					$error = true;
					$errorFields[$fieldName] = "Bitte Wert eingeben!";
				}
			}

			if(!$error)
			{
				$password = $_POST['pwd'];
				$username = $_POST['name'];

				if(strlen($password) < 8) //check if password is long enough
				{
					$error = true;
					$errorFields['pwd'] = "Passwort ist zu kurz! Bitte mindestens 8 Zeichen eingeben";
				}
				else if($password != $_POST['pwd2']) //check if password matches password repetition
				{
					$error = true;
					$errorFields['pwd2'] = "Passwort Wiederholung entspricht nicht dem gleichen Wert von Passwort!";
				}

				if(!$error)
				{
					//check if username exists already...
					if(User::existsWithUsername($username) == false)
					{
						User::createUser(array('username' => $username, 'password' => $password));

						$jsonResponse = new JSON();
						$jsonResponse->result = true;
						$jsonResponse->setMessage("Benutzer wurde erfolgreich hinzugefügt!");
						$jsonResponse->send();
					}
					else
					{
						$errorFields['name'] = "Benutzername ist schon vorhanden!";

						$jsonResponse = new JSON();
						$jsonResponse->result = false;
						$jsonResponse->setData(array('errorFields' => $errorFields));
						$jsonResponse->send();
					}

				}
			}

			$jsonResponse = new JSON();
			$jsonResponse->result = false;
			$jsonResponse->setData(array('errorFields' => $errorFields));
			$jsonResponse->send();
		}
	}
}