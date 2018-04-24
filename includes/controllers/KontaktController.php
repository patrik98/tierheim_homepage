<?php
/**
 * Created by PhpStorm.
 * User: Patrik
 * Date: 24.04.2018
 * Time: 11:30
 */

class KontaktController extends Controller
{
    protected $viewFileName = "kontakt"; //this will be the View that gets the data...
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
        $this->view->title = "Kontakt";
        $this->view->username = $this->user->username;
    }

}