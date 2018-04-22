<?php

/**
 * Class User
 * Provnutzerides methods to login and logout - or to check if someone is loggedIn
 */
class User extends Database
{
	public $email = '';
	public $nutzerid = '';

	public $isLoggedIn = false;

	/**
	 * User constructor.
	 * This is a little crazy - especailly the "fillIt" and "shipIt" part.
	 * Instead of just saving a normal value like an integer or a string
	 * one is able to save complex structures by serializing them and store them as a string
	 * with that method - we are able to save public attributes in the session
	 * if there are values in the session we fill our object with those values
	 * not magic - but a little complex on the first sight
	 */
	public function __construct()
	{
		parent::__construct();

		if($_SESSION[get_class($this).'Ship'] != '')
		{
			$ship = $_SESSION[get_class($this)."Ship"];
			$this->fillIt($ship);
		}
	}

	/**
	 * save our values in the session
	 */
	public function __destruct()
	{
		parent::__destruct();

		$_SESSION[get_class($this).'Ship'] = $this->shipIt();
	}

	/**
	 * Checks if the User is logged in - if not redirect him to the login page
	 * @return bool
	 */
	public function authenticate()
	{
		//checks if the user is logged in - if not - redirect to login!
		if(!$this->isLoggedIn)
		{
			define('LOGGED_IN', false);

			$this->redirectToLogin();

			//return false;
		}

		define('LOGGED_IN', true);

		return true;
	}

	public function redirectToLogin()
	{
		if(API_CALL === true)
		{
			header('Location: ../'.LOGIN_URL);
		}
		else
		{
			header('Location: '.LOGIN_URL);
		}
		header('Status: 303');
		exit();
	}

	public function redirectToIndex()
	{
		header('Location: '.INDEX_URL);
		header('Status: 303');
		exit();
	}

	public function login($email, $passwort)
	{
		$sql = "SELECT `nutzerid`,`passwort` FROM `nutzer` WHERE `email`='" . $this->escapeString($email) . "'";
		$result = $this->query($sql);


		if($this->numRows($result) == 0)
		{
			$this->isLoggedIn = false;
			return false; //email not found!
		}

		//now lets check for the password
		$row = $this->fetchObject($result);

		if(password_verify($passwort, $row->password))
		{
			$this->email = $email;
			$this->nutzerid = $row->nutzerid;
			$this->isLoggedIn = true;

			return true;
		}

		$this->isLoggedIn = false;
		return false;
	}

	public static function getById($nutzerid)
	{
		$nutzerid = intval($nutzerid);
		$sql = "SELECT * FROM `nutzer` WHERE `nutzerid`=".$nutzerid;

		$db = new Database();
		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			//get the data
			$data = $db->fetchObject($result);
			$user = new User();

			$user->email = $data['email'];
			$user->nutzerid = $nutzerid;

			return $user;
		}

		return null;
	}

	public function logout()
	{
		$this->email = null;
		$this->nutzerid = null;
		$this->isLoggedIn = false;
		$this->shipIt();

		//$this->redirectToLogin();

		return true;
	}

	/**
	 * Gets all attributes from this class, serializes it adds slahes to save this string in the session
	 * @return string
	 */
	protected function shipIt()
	{
		$ship = serialize($this);
		$ship = addslashes($ship);
		return $ship;
	}

	/**
	 * Fills this class with the data from the session which was previously saved
	 * @param $ship
	 */
	protected function fillIt($ship)
	{
		$ship = stripslashes($ship);
		$thiz = unserialize($ship);
		$ro = new reflectionObject($thiz);
		foreach ($ro->getProperties() as $propObj)
		{
			$this->{$propObj->name} = $thiz->{$propObj->name};
		}
	}

	public static function existsWithUsername($email)
	{
        $db = new Database();

        //check if user exists...
        $sql = "SELECT COUNT(`nutzerid`) AS num FROM `nutzer` WHERE `email`='".$db->escapeString($email)."'";
        $result = $db->query($sql);

		$row = $db->fetchObject($result);

		if($row->num == 0)
		{
			return false;
		}

		return true;
	}

	public static function createUser($data)
	{
		$db = new Database();

        $vname = $db->escapeString($data['vname']);
        $nname = $db->escapeString($data['nname']);
        $gebdat = $db->escapeString($data['gebdat']);
        $passwort = password_hash($db->escapeString($data['pwd']), PASSWORD_BCRYPT);
        $email = $db->escapeString($data['email']);
		$strasse = $db->escapeString($data['strasse']);
        $hausnr = $db->escapeString($data['hausnr']);
        $plz = $db->escapeString($data['plz']);
        $ort = $db->escapeString($data['ort']);

		$sql = "INSERT INTO `nutzer`(`vname`,`nname`,`gebdat`,`passwort`,`email`,`strasse`,`hausnr`,`plz`,`ort`) VALUES('".$vname."','".$nname."','".$gebdat."','".$passwort."','".$email."','".$strasse."','".$hausnr."','".$plz."','".$ort."')";
		$db->query($sql);
	}

	public static function deleteUser($nutzerid)
	{
		//@TODO
	}

	public static function updateUser($data)
	{
		//@TODO
	}

	public function delete()
	{
		self::deleteUser($this->nutzerid);
	}

	public function update($data)
	{
		self::updateUser($this->nutzerid, $data);
	}
}
