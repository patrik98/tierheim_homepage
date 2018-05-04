<?php

class HilfUnsController extends Controller
{

	protected $viewFileName = "hilf_uns"; //this will be the View that gets the data
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
		$this->view->title = "Hilf uns";
        $this->view->username = $this->user->username;

	}

}