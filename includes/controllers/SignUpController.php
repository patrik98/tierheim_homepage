<?php
/**
 * Created by PhpStorm.
 * User: Patrik
 * Date: 21.04.2018
 * Time: 19:22
 */

class SignUpController extends Controller
{
    protected $viewFileName = "register"; //this will be the View that gets the data...
    protected $loginRequired = false;

    public function run()
    {
        $this->view->title = 'Register';

        $this->checkForRegisterPost();
    }

    private function checkForRegisterPost()
    {
        if (!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'register') {
            $requiredFields = array('vname', 'nname', 'gebdat', 'pwd', 'pwd2', 'email', 'strasse', 'hausnr', 'plz', 'ort');

            $error = false;
            $errorFields = array();

            foreach ($requiredFields as $fieldName) {
                if (!isset($_POST[$fieldName]) || $_POST[$fieldName] == '') {
                    $error = true;
                    $errorFields[$fieldName] = "Bitte Wert eingeben!";
                }
            }

            if (!$error) {
                $vname = $_POST['vname'];
                $nname = $_POST['nname'];
                $gebdat = $_POST['gebdat'];
                $password = $_POST['pwd'];
                $email = $_POST['email'];
                $strasse = $_POST['strasse'];
                $hausnr = $_POST['hausnr'];
                $plz = $_POST['plz'];
                $ort = $_POST['ort'];

                if (strlen($password) < 8) //check if password is long enough
                {
                    $error = true;
                    $errorFields['pwd'] = "Passwort ist zu kurz! Bitte mindestens 8 Zeichen eingeben";

                    $this->view->PasswordTooShort = true;
                } else if ($password != $_POST['pwd2']) //check if password matches password repetition
                {
                    $error = true;
                    $errorFields['pwd2'] = "Passwort Wiederholung entspricht nicht dem gleichen Wert von Passwort!";

                    $this->view->PasswordMismatch = true;
                }

                if (!$error) {
                    //check if username exists already...
                    if (User::existsWithUsername($email) == false) {
                        User::createUser(array('vname' => $vname, 'nname' => $nname, 'gebdat' => $gebdat,'pwd' => $password, 'email' => $email,'strasse' => $strasse, 'hausnr' => $hausnr, 'plz' => $plz, 'ort' => $ort));

                        /*$jsonResponse = new JSON();
                        $jsonResponse->result = true;
                        $jsonResponse->setMessage("Benutzer wurde erfolgreich hinzugefügt!");
                        $jsonResponse->send();*/

                        $this->view->UserRegistered = true;
                    } else {
                        $errorFields['email'] = "E-Mail wurde bereits benutzt!";

                        /*$jsonResponse = new JSON();
                        $jsonResponse->result = false;
                        $jsonResponse->setData(array('errorFields' => $errorFields));
                        $jsonResponse->send();*/

                        $this->view->EmailInUse = true;
                    }

                }
            }

            /*$jsonResponse = new JSON();
            $jsonResponse->result = false;
            $jsonResponse->setData(array('errorFields' => $errorFields));
            $jsonResponse->send();*/

            $this->view->FieldsEmpty = true;
            $this->view->errorFields = $errorFields;
        }
    }
}