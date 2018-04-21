<?php
/**
 * Created by PhpStorm.
 * User: Patrik
 * Date: 21.04.2018
 * Time: 18:49
 */

class TierprofilController extends Controller
{
    protected $viewFileName = "tierprofil"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = "Tierprofil";
        $this->view->username = $this->user->username;

        //$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}