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

    public function __construct($pageName)
    {
        $this->pageName = $pageName;

        $this->user = new User();

        $this->user->authenticate(false);

        $this->view = new View($this->viewFileName, $pageName);

        $this->run();
        $this->output();
    }

    public function run()
    {
        $this->view->title = "Tierprofil";
        $this->view->username = $this->user->username;

        if(isset($_GET['id']) && $_GET['id'] != '')
        {
            //passt tier holen
            $tierObj = TierModel::getTierById($_GET['id']);

        }
        else
        {
            //fehlermeldung kein tier übergeben
        }
        //$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}