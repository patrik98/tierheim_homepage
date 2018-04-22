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

        if($this->user->isLoggedIn)
        {
            $this->user->redirectToIndex();
        }

        $this->checkForLoginPost();
    }

    private function checkForLoginPost()
    {
        if(!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'login')
        {
            //probably a login attempt!

            $email = $_POST['email'];
            $passwort = $_POST['pwd'];

            if($email != "" && $passwort != "")
            {
                if($this->user->login($email, $passwort))
                {
                    $this->user->redirectToIndex();
                }
                else
                {
                    $this->view->errorPasswd = true;
                }
            }

        }
    }
}