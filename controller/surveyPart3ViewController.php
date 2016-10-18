<?php
session_start();

/* Check that the form is validated */
if (isset($_POST['surveyPartThreeSubmit'])) {

    /* Give the value "-" for all these inputs if they're empty */
    if (empty($_POST['ageCategory'])) {
        $_POST['ageCategory'] = "-";
    }
    if (empty($_POST['applyCosmeticsProducts'])) {
        $_POST['applyCosmeticsProducts'] = "-";
    }
    if (empty($_POST['whyNoApplyProducts'])) {
        $_POST['whyNoApplyProducts'] = "-";
    }
    if (empty($_POST['frequencyFaceCosmeticUse'])) {
        $_POST['frequencyFaceCosmeticUse'] = "-";
    }
    if (empty($_POST['frequencyHairCosmeticUse'])) {
        $_POST['frequencyHairCosmeticUse'] = "-";
    }
    if (empty($_POST['frequencyBodyCosmeticUse'])) {
        $_POST['frequencyBodyCosmeticUse'] = "-";
    }
    if (empty($_POST['productLocation'])) {
        $_POST['productLocation'] = "-";
    }
    if (empty($_POST['internetProductLocation'])) {
        $_POST['internetProductLocation'] = "-";
    }
    if (empty($_POST['otherTownProductLocation'])) {
        $_POST['otherTownProductLocation'] = "-";
    }
    if (empty($_POST['otherProductLocation'])) {
        $_POST['otherProductLocation'] = "-";
    }
    if (empty($_POST['favouriteUseMode'])) {
        $_POST['favouriteUseMode'] = "-";
    }
    if (empty($_POST['otherFavouriteModeUse'])) {
        $_POST['otherFavouriteModeUse'] = "-";
    }
    if (empty($_POST['hairPriceAndFrequencyUse'])) {
        $_POST['hairPriceAndFrequencyUse'] = "-";
    }
    if (empty($_POST['skinPriceAndFrequencyUse'])) {
        $_POST['skinPriceAndFrequencyUse'] = "-";
    }
    if (empty($_POST['childCosmeticsPurchaseSatisfaction'])) {
        $_POST['childCosmeticsPurchaseSatisfaction'] = "-";
    }
    if (empty($_POST['whyDissatisfactionChildCosmeticsUse'])) {
        $_POST['whyDissatisfactionChildCosmeticsUse'] = "-";
    }

    /* Serialise these arrays */
    if ($_POST['ageCategory'] != "-") {
        $_POST['ageCategory'] = serialize($_POST['ageCategory']);
    }
    if ($_POST['productLocation'] != "-") {
        $_POST['productLocation'] = serialize($_POST['productLocation']);
    }
    if ($_POST['favouriteUseMode'] != "-") {
        $_POST['favouriteUseMode'] = serialize($_POST['favouriteUseMode']);
    }

    /* Storing all data in a $_SESSION */
    $_SESSION['part3'] = ['hasChild' => $_POST['hasChild'], 'ageCategory' => $_POST['ageCategory'], 'applyCosmeticsProducts' => $_POST['applyCosmeticsProducts'],
        'whyNoApplyProducts' => $_POST['whyNoApplyProducts'], 'frequencyFaceCosmeticUse' => $_POST['frequencyFaceCosmeticUse'],
        'frequencyHairCosmeticUse' => $_POST['frequencyHairCosmeticUse'], 'frequencyBodyCosmeticUse' => $_POST['frequencyBodyCosmeticUse'],
        'productLocation' => $_POST['productLocation'], 'internetProductLocation' => $_POST['internetProductLocation'],
        'otherTownProductLocation' => $_POST['otherTownProductLocation'], 'otherProductLocation' => $_POST['otherProductLocation'],
        'favouriteUseMode' => $_POST['favouriteUseMode'], 'otherFavouriteUseMode' => $_POST['otherFavouriteModeUse'],
        'hairPriceAndFrequencyUse' => $_POST['hairPriceAndFrequencyUse'], 'skinPriceAndFrequencyUse' => $_POST['skinPriceAndFrequencyUse'],
        'childCosmeticsPurchaseSatisfaction' => $_POST['childCosmeticsPurchaseSatisfaction'],
        'whyDissatisfactionChildCosmeticsUse' => $_POST['whyDissatisfactionChildCosmeticsUse']];
    header('location:../view/surveyPart4View.php');
}

