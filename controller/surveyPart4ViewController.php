<?php
session_start();
require('../model/SurveyResponses.php');
require('../model/SurveyResponsesManager.php');

/* Check that the form is validated */
if (isset($_POST['surveyPartFourSubmit'])) {

    /* Give the value "-" for all these inputs if they're empty */
    if (empty($_POST['otherSocialMediaUse'])) {
        $_POST['otherSocialMediaUse'] = "-";
    }
    if (empty($_POST['phoneNumber'])) {
        $_POST['phoneNumber'] = "-";
    }
    if (empty($_POST['mailAdress'])) {
        $_POST['mailAdress'] = "-";
    }

    /* Serialise this array */
    $_POST['socialMediaUse'] = serialize($_POST['socialMediaUse']);

    /* Storing all data in a $_SESSION */
    $_SESSION['part4'] = ['socialMediaUse' => $_POST['socialMediaUse'], 'otherSocialMediaUse' => $_POST['otherSocialMediaUse'],
        'joinPhone' => $_POST['joinPhone'], 'joinMail' => $_POST['joinMail'], 'phoneNumber' => $_POST['phoneNumber'], 'mailAddress' => $_POST['mailAdress']];

    /* Instance of a new PDO object (database connexion) */
    $dbh = new PDO('mysql:host=totyfrsjswtoty82.mysql.db;dbname=totyfrsjswtoty82;charset=utf8', 'totyfrsjswtoty82', 'PWDToTy1982');

    /* Instance of a new SurveyResponses object */
    $surveyResponses = new SurveyResponses($_SESSION);

    /* Instance of a new SurveyResponsesManager object */
    $surveyResponsesManager = new SurveyResponsesManager($dbh);

    /* Insert survey responses in database */
    $surveyResponsesManager->insertSurveyResponses($surveyResponses);
    header('location:../view/thanksView.php');
}

