<?php
session_start();

/* Check that the form is validated */
if (isset($_POST['surveyPartOneSubmit'])) {

    /* Check that the input town, the input postalCode, the input birthYear and the input whyNeedAdvice are not empty */
    if (!empty($_POST['town']) && !empty($_POST['postalCode']) && !empty($_POST['birthYear']) && !empty($_POST['whyNeedAdvice'])) {

        /* Give the value "-" for all these inputs if they're empty */
        if (empty($_POST['internetPurchaseLocation'])) {
            $_POST['internetPurchaseLocation'] = "-";
        }
        if (empty($_POST['otherTownPurchaseLocation'])) {
            $_POST['otherTownPurchaseLocation'] = "-";
        }
        if (empty($_POST['otherPurchaseLocation'])) {
            $_POST['otherPurchaseLocation'] = "-";
        }
        if (empty($_POST['otherPreferredUseMode'])) {
            $_POST['otherPreferredUseMode'] = "-";
        }
        if (empty($_POST['whyProductsDifficulties'])) {
            $_POST['whyProductsDifficulties'] = "-";
        }
        if (empty($_POST['otherWhyProductsDifficulties'])) {
            $_POST['otherWhyProductsDifficulties'] = "-";
        }
        if (empty($_POST['otherChangeHairAppearance'])) {
            $_POST['otherChangeHairAppearance'] = "-";
        }
        if (empty($_POST['placeChangeHairAppearance'])) {
            $_POST['placeChangeHairAppearance'] = "-";
        }
        if (empty($_POST['otherPlaceChangeHairAppearance'])) {
            $_POST['otherPlaceChangeHairAppearance'] = "-";
        }
        if (empty($_POST['whyDissatisfactionCosmeticsUse'])) {
            $_POST['whyDissatisfactionCosmeticsUse'] = "-";
        }

        /* Serialise these arrays */
        $_POST['skinFeature'] = serialize($_POST['skinFeature']);
        $_POST['purchaseLocation'] = serialize($_POST['purchaseLocation']);
        $_POST['preferredUseMode'] = serialize($_POST['preferredUseMode']);
        if ($_POST['whyProductsDifficulties'] != "-") {
            $_POST['whyProductsDifficulties'] = serialize($_POST['whyProductsDifficulties']);
        }
        $_POST['changeHairAppearance'] = serialize($_POST['changeHairAppearance']);
        if ($_POST['placeChangeHairAppearance'] != "-") {
            $_POST['placeChangeHairAppearance'] = serialize($_POST['placeChangeHairAppearance']);
        }

        /* Storing all data in a $_SESSION */
        $_SESSION['part1'] = ['gender' => $_POST['gender'], 'town' => $_POST['town'], 'postalCode' => $_POST['postalCode'], 'age' => $_POST['age'],
            'birthYear' => $_POST['birthYear'], 'skinTone' => $_POST['skinTone'], 'skinFeature' => $_POST['skinFeature'], 'hairType' => $_POST['hairType'],
            'faceCosmeticsUse' => $_POST['faceCosmeticUse'], 'bodyCosmeticsUse' => $_POST['bodyCosmeticUse'], 'hairCosmeticsUse' => $_POST['hairCosmeticUse'],
            'handCosmeticsUse' => $_POST['handCosmeticUse'], 'footCosmeticsUse' => $_POST['footCosmeticUse'], 'beardCosmeticsUse' => $_POST['beardCosmeticUse'],
            'purchaseLocation' => $_POST['purchaseLocation'], 'internetPurchaseLocation' => $_POST['internetPurchaseLocation'],
            'otherTownPurchaseLocation' => $_POST['otherTownPurchaseLocation'], 'otherPurchaseLocation' => $_POST['otherPurchaseLocation'],
            'preferredUseMode' => $_POST['preferredUseMode'], 'otherPreferredUseMode' => $_POST['otherPreferredUseMode'], 'needAdvice' => $_POST['needAdvice'],
            'whyNeedAdvice' => $_POST['whyNeedAdvice'], 'skinProductsDifficulties' => $_POST['skinProductsDifficulties'],
            'hairProductsDifficulties' => $_POST['hairProductsDifficulties'], 'whyProductsDifficulties' => $_POST['whyProductsDifficulties'],
            'otherWhyProductsDifficulties' => $_POST['otherWhyProductsDifficulties'], 'changeHairAppearance' => $_POST['changeHairAppearance'],
            'otherChangeHairAppearance' => $_POST['otherChangeHairAppearance'], 'placeChangeHairAppearance' => $_POST['placeChangeHairAppearance'],
            'otherPlaceChangeHairAppearance' => $_POST['otherPlaceChangeHairAppearance'], 'skinPriceAndFrequencyUse' => $_POST['skinPriceAndFrequencyUse'],
            'hairPriceAndFrequencyUse' => $_POST['hairPriceAndFrequencyUse'], 'cosmeticsPurchaseSatisfaction' => $_POST['cosmeticsPurchaseSatisfaction'],
            'whyDissatisfactionCosmeticsUse' => $_POST['whyDissatisfactionCosmeticsUse']];
        header('location:../view/surveyPart2View.php');
    }
}

