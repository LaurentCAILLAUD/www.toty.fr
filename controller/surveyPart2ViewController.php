<?php
session_start();

/* Check that the form is validated */
if (isset($_POST['surveyPartTwoSubmit'])) {

    /* Give the value "-" for all these inputs if they're empty */
    if (empty($_POST['otherHairCareWaiting'])) {
        $_POST['otherHairCareWaiting'] = "-";
    }
    if (empty($_POST['otherBodyCareWaiting'])) {
        $_POST['otherBodyCareWaiting'] = "-";
    }
    if (empty($_POST['otherPackingInformation'])) {
        $_POST['otherPackingInformation'] = "-";
    }
    if (empty($_POST['otherPackagingType'])) {
        $_POST['otherPackagingType'] = "-";
    }
    if (empty($_POST['whyRefuseMeeting'])) {
        $_POST['whyRefuseMeeting'] = "-";
    }

    /* Serialise these arrays */
    $_POST['hairCareWaiting'] = serialize($_POST['hairCareWaiting']);
    $_POST['bodyCareWaiting'] = serialize($_POST['bodyCareWaiting']);
    $_POST['packingInformation'] = serialize($_POST['packingInformation']);
    $_POST['packagingType'] = serialize($_POST['packagingType']);

    /* Storing all data in a $_SESSION */
    $_SESSION['part2'] = ['hairCareWaiting' => $_POST['hairCareWaiting'], 'otherHairCareWaiting' => $_POST['otherHairCareWaiting'],
        'bodyCareWaiting' => $_POST['bodyCareWaiting'], 'otherBodyCareWaiting' => $_POST['otherBodyCareWaiting'],
        'packingInformation' => $_POST['packingInformation'], 'otherPackingInformation' => $_POST['otherPackingInformation'],
        'packagingType' => $_POST['packagingType'], 'otherPackagingType' => $_POST['otherPackagingType'], 'homeMeeting' => $_POST['homeMeeting'],
        'friendMeeting' => $_POST['friendMeeting'], 'whyRefuseMeeting' => $_POST['whyRefuseMeeting']];
    header('location:../view/surveyPart3View.php');
}

