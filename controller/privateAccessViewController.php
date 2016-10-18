<?php
session_start();
require ('../model/User.php');
require ('../model/UserRepository.php');
try {

    /* Check that the form is validated */
    if (isset($_POST['mainFormSubmit'])) {

        /* Check that the mail input and the password input are not empty */
        if (!empty($_POST['ownerMail']) && !empty('ownerPassword')) {

            /* Instance of a new User object */
            $user = new User($_POST['ownerMail'], $_POST['ownerPassword']);

            /* Instance of a new PDO object (database connexion) */
            $dbh = new PDO('mysql:host=totyfrsjswtoty82.mysql.db;dbname=totyfrsjswtoty82;charset=utf8', 'totyfrsjswtoty82', 'PWDToTy1982');

            /* Instance of a new UserRepository object */
            $userRepository = new UserRepository($dbh);

            /* Check if the user is authorized to connect */
            $authorizedUser = $userRepository->verifyUserIDs($user->getUserMail(), $user->getUserPassword());
            if ($authorizedUser == true) {
                $_SESSION['login'] = ['userMail' => $user->getUserMail()];
                header('location:../view/respondentsAnswersView.php');
            } else {
                throw new Exception('Vous n\'avez pas accés à cette page.');
            }
        }
    }
} catch (Exception $e) {
    echo '<script type="text/javascript">alert("' . $e->getMessage() . '")</script>';
}