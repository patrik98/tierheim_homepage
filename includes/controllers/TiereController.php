<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class TiereController extends Controller
{
	protected $viewFileName = "tiere"; //this will be the View that gets the data...
    protected $loginRequired = false;


	public function run()
	{
		$this->view->title = "Tiere";
		$this->view->email = $this->user->username;

		//$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
	}

}