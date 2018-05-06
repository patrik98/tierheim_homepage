<?php
/**
 * Created by PhpStorm.
 * User: Patrik
 * Date: 06.05.2018
 * Time: 13:02
 */

class ActivityController extends Controller{

    protected $viewFileName = "activity"; //this will be the View that gets the data...
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
        $this->view->title = "Aktivität";

        $this->view->username = $this->user->username;
        $this->view->userid = $this->user->id;

        $this->view->tiere = TierModel::getAlleTiere();



        $this->checkForActivityPost();

    }

    private function checkForActivityPost()
    {
        if (!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'activity') {
            $requiredFields = array('tier','termin', 'bezeichnung','nutzerid');

            $error = false;
            $errorFields = array();

            foreach ($requiredFields as $fieldName) {
                if (!isset($_POST[$fieldName]) || $_POST[$fieldName] == '') {
                    $error = true;
                    $errorFields[$fieldName] = "Bitte Wert eingeben!";
                }
            }

            if (!$error) {

                $termin = $_POST['termin'];
                $activity = $_POST['bezeichnung'];
                $tier = $_POST['tier'];
                $nutzer = $_POST['nutzerid'];

            }

            if (!$error) {
                ActivityModel::createNewActivity(array('termin'=> $termin, 'bezeichnung'=> $activity, 'tier'=> $tier, 'nutzerid'=> $nutzer));

                $this->view->ActivityAdded = true;
            }

            else {
                $errorFields['bezeichnung'] = "Fehler";
            }
        }

        $this->view->FieldsEmpty = true;
        $this->view->errorFields = $errorFields;
    }
}