<?php
require('../model/SurveyResponsesRepository.php');
require('../model/SurveyResponsesManager.php');
try {

    /* Instance of a new PDO object (database connexion) */
    $dbh = new PDO('mysql:host=totyfrsjswtoty82.mysql.db;dbname=totyfrsjswtoty82;charset=utf8', 'totyfrsjswtoty82', 'PWDToTy1982');

    /* Instance of a new UserRepository object */
    $surveyResponsesRepository = new SurveyResponsesRepository($dbh);

    /* Recovery of all survey responses */
    $allSurveyResponses = $surveyResponsesRepository->getAllRespondentsAnswers();

    /* check if the user has clicked on the button delete (respondentsAnswersView.php) */
    if (isset($_GET['id'])) {

        /* Instance of a new SurveyResponsesManager object */
        $surveyResponsesManager = new SurveyResponsesManager($dbh);

        /* Delete the respondentAnswers */
        $surveyResponsesManager->deleteRespondentAnswersWithId($_GET['id']);
        header('location:../view/respondentsAnswersView.php');
    }
} catch (Exception $e) {
    echo '<script type="text/javascript">alert("' . $e->getMessage() . '")</script>';
}

