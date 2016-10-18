<?php
require('../controller/respondentsAnswersViewController.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TOTY - La beauté personnalisée - Les réponses</title>

    <!-- stylesheet files -->
    <link href="../css/respondentsAnswersViewSmartphoneStylesheet.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../css/respondentsAnswersViewTabletStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)">
    <link href="../css/respondentsAnswersViewTabletLargeFormatStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 800px)">
    <link href="../css/respondentsAnswersViewComputerStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">

    <!-- javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/animationMenu.js" type="application/javascript"></script>
    <noscript>
        <meta http-equiv="Refresh" content="0; URL=view/javascriptDisabledView.html">
    </noscript>
</head>
<body>

<!-- Beginning of the block "mainWrapper" -->
<div id="mainWrapper">

    <!-- Beginning of the block "mainHeader" -->
    <header id="mainHeader">
        <img src="../pictures/logo-toty-img.png">
    </header>
    <!-- End ogf the block "mainHeader" -->

    <!-- Beginning of the block "mainMenuContainer" -->
    <div id="mainMenuContainer">

        <!-- Beginning of the block "mainMenuControlButton" -->
        <div id="mainMenuControlButton">
            <figure id="menuImg">
                <img src="../pictures/menu-hamburger-img.png">
            </figure>
            <figure id="closeMenu">
                <img src="../pictures/close-menu-img.png">
            </figure>
        </div>
        <!-- End of the block "mainMenuControlButton" -->

        <!-- Beginning of the block "mainMenuContent" -->
        <div id="mainMenuContent">
            <ul id="mainMenu">
                <li><a href="../index.html">ACCUEIL</a></li>
                <img src="../pictures/round-color-img.png">
                <li><a href="contactView.php">CONTACT</a></li>
            </ul>
        </div>
        <!-- End of the block "mainMenuContent" -->

    </div>
    <!-- End of the block "mainMenuContainer" -->

    <div class="clear"></div>

    <!-- Beginning of the block "mainContainer" -->
    <div id="mainContainer">

        <!-- Beginning of the block "mainContent' -->
        <div id="mainContent">
            <?php if (!empty($allSurveyResponses)) : ?>
                <?php foreach ($allSurveyResponses as $respondentId => $respondentSurvey) : ?>
                    <h1>Sondé n°<?php echo $respondentId; ?></h1>
                    <p class="surveyQuestion">
                        1. Vous êtes ?:
                    </p>
                   <ul class="answersList">
                       <li><?php echo $respondentSurvey['gender']; ?></li>
                   </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        2. Votre ville et votre code postal ?:
                    </p>
                    <ul class="answersList">
                        <li><span class="underline">Votre ville:</span> <?php echo $respondentSurvey['town']; ?></li>
                        <li><span class="underline">Votre code postal:</span> <?php echo $respondentSurvey['postalCode']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        3. Dans quelle tranche d'âge vous situez-vous ?:
                    </p>
                   <ul class="answersList">
                       <li><?php echo $respondentSurvey['age']; ?></li>
                   </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        4. Quelle est votre année de naissance ?:
                    </p>
                   <ul class="answersList">
                       <li><?php echo $respondentSurvey['birthYear']; ?></li>
                   </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        5. Votre peau est de teinte ?:
                    </p>
                   <ul class="answersList">
                       <li><?php echo $respondentSurvey['skinTone']; ?></li>
                   </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        6. Diriez-vous de votre peau qu'elle est ?:
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['skinFeature'] as $skinFeature) : ?>
                            <li><?php echo $skinFeature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        7. Diriez-vous de vos cheveux qu'ils sont ?:
                    </p>
                   <ul class="answersList">
                       <li><?php echo $respondentSurvey['hairType']; ?></li>
                   </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        8. Utilisez-vous des produits de beauté pour ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['faceCosmeticsUse']; ?></li>
                        <li><?php echo $respondentSurvey['bodyCosmeticsUse']; ?></li>
                        <li><?php echo $respondentSurvey['hairCosmeticsUse']; ?></li>
                        <li><?php echo $respondentSurvey['handCosmeticsUse']; ?></li>
                        <li><?php echo $respondentSurvey['footCosmeticsUse']; ?></li>
                        <li><?php echo $respondentSurvey['beardCosmeticsUse']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        9. Où trouvez-vous ces produits ?:
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['purchaseLocation'] as $purchaseLocation) : ?>
                            <?php if ($purchaseLocation == "Internet") : ?>
                                <li><?php echo $purchaseLocation; ?>: <?php echo $respondentSurvey['internetPurchaseLocation']; ?></li>
                            <?php elseif ($purchaseLocation == "Dans une ville/région différente de la vôtre") : ?>
                                <li><?php echo $purchaseLocation; ?>: <?php echo $respondentSurvey['otherTownPurchaseLocation']; ?></li>
                            <?php elseif ($purchaseLocation == "Autre") : ?>
                                <li><?php echo $purchaseLocation; ?>: <?php echo $respondentSurvey['otherPurchaseLocation']; ?></li>
                            <?php else : ?>
                                <li><?php echo $purchaseLocation; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        10. Quel mode d'utilisation préférez-vous ?:
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['preferredUseMode'] as $preferredUseMode) : ?>
                            <?php if ($preferredUseMode == "Autre") : ?>
                                <li><?php echo $preferredUseMode; ?>: <?php echo $respondentSurvey['otherPreferredUseMode']; ?></li>
                            <?php else : ?>
                                <li><?php echo $preferredUseMode; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        11. Avez-vous besoin d'être conseillée lors de vos achats ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['needAdvice']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        12. Pourquoi ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['whyNeedAdvice']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        13. Rencontrez-vous des difficultés à trouver des produits adaptés ?:
                    </p>
                    <ul class="answersList">
                        <li><span class="underline">Pour votre peau:</span> <?php echo $respondentSurvey['skinProductsDifficulties']; ?></li>
                        <li><span class="underline">Pour vos cheveux:</span> <?php echo $respondentSurvey['hairProductsDifficulties']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        14. Si oui, pourquoi ?:
                    </p>
                    <?php if ($respondentSurvey['whyProductsDifficulties'] == "-") : ?>
                        <ul class="answersList">
                            <li><?php echo $respondentSurvey['whyProductsDifficulties']; ?></li>
                        </ul>
                    <?php else : ?>
                        <ul class="answersList">
                            <?php foreach ($respondentSurvey['whyProductsDifficulties'] as $whyProductsDifficulties) : ?>
                                <?php if ($whyProductsDifficulties == "Autre") : ?>
                                    <li><?php echo $whyProductsDifficulties; ?>: <?php echo $respondentSurvey['otherWhyProductsDifficulties']; ?></li>
                                <?php else: ?>
                                    <li><?php echo $whyProductsDifficulties; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        15. Vous arrive t'il de modifier l'aspect de vos cheveux avec les propositions ci-dessous ?:
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['changeHairAppearance'] as $changeHairAppearance) : ?>
                            <?php if ($changeHairAppearance == "Autre") : ?>
                                <li><?php echo $changeHairAppearance; ?>: <?php echo $respondentSurvey['otherChangeHairAppearance']; ?></li>
                            <?php else : ?>
                                <li><?php echo $changeHairAppearance; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        16. S'il vous arrive de modifier l'aspect de vos cheveux, où vous rendez-vous ?:
                    </p>
                    <?php if ($respondentSurvey['placeChangeHairAppearance'] == "-") : ?>
                        <ul class="answersList">
                            <li><?php echo $respondentSurvey['placeChangeHairAppearance']; ?></li>
                        </ul>
                    <?php else : ?>
                        <ul class="answersList">
                            <?php foreach ($respondentSurvey['placeChangeHairAppearance'] as $placeChangeHairAppearance) : ?>
                                <?php if ($placeChangeHairAppearance == "Autre") : ?>
                                    <li><?php echo $placeChangeHairAppearance; ?>: <?php echo $respondentSurvey['otherPlaceChangeHairAppearance']; ?></li>
                                <?php else: ?>
                                    <li><?php echo $placeChangeHairAppearance; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        17. Concernant votre peau, cochez une fourchette de prix et une fréquence qui correspond le plus à vos habitudes d'achats ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['skinPriceAndFrequencyUse']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        18. Concernant vos cheveux, cohez une fourchette de prix et une fréquence qui correspond le plus à vos habitudes d'achats ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['hairPriceAndFrequencyUse']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        19. Globalement êtes-vous satisfait(e) des produits cosmétiques que vous achetez ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['cosmeticsPurchaseSatisfaction']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        20. Pourquoi êtes-vous moyennement/pas satisfait(e) ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['whyDissatisfactionCosmeticsUse']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        21. Qu'attendez-vous d'un soin capillaire ?
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['hairCareWaiting'] as $hairCareWaiting) : ?>
                            <?php if ($hairCareWaiting == "Autre") : ?>
                                <li><?php echo $hairCareWaiting; ?>: <?php echo $respondentSurvey['otherHairCareWaiting']; ?></li>
                            <?php else : ?>
                                <li><?php echo $hairCareWaiting; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        22. Qu'attendez-vous d'un soin visage/corps ?:
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['bodyCareWaiting'] as $bodyCareWaiting) : ?>
                            <?php if ($bodyCareWaiting == "Autre") : ?>
                                <li><?php echo $bodyCareWaiting; ?>: <?php echo $respondentSurvey['otherBodyCareWaiting']; ?></li>
                            <?php else : ?>
                                <li><?php echo $bodyCareWaiting; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        23. Quelles informations sur l'emballage vous aident à faire votre choix ?:
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['packingInformation'] as $packingInformation) : ?>
                            <?php if ($packingInformation == "Autre") : ?>
                                <li><?php echo $packingInformation; ?>: <?php echo $respondentSurvey['otherPackingInformation']; ?></li>
                            <?php else : ?>
                                <li><?php echo $packingInformation; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        24. Quel type d'emballage préférez-vous ?:
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['packagingType'] as $packagingType) : ?>
                            <?php if ($packagingType == "Autre") : ?>
                                <li><?php echo $packagingType; ?>: <?php echo $respondentSurvey['otherPackagingType']; ?></li>
                            <?php else : ?>
                                <li><?php echo $packagingType; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        25. Seriez-vous intéressé(e) par l'achat de produits cosmétiques lors d'une réunion ?
                    </p>
                    <ul class="answersList">
                        <li><span class="underline">Chez vous:</span> <?php echo $respondentSurvey['homeMeeting']; ?></li>
                        <li><span class="underline">Chez un/une ami(e):</span> <?php echo $respondentSurvey['friendMeeting']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        26. Si non, pourquoi ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['whyRefuseMeeting']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        27. Avez-vous un/des enfants ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['hasChild']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        28. Dans quelle tranche d'âge se situe votre/vos enfants ?:
                    </p>
                    <?php if ($respondentSurvey['ageCategory'] == "-") : ?>
                        <ul class="answersList">
                            <li><?php echo $respondentSurvey['ageCategory']; ?></li>
                        </ul>
                    <?php else : ?>
                        <ul class="answersList">
                            <?php foreach ($respondentSurvey['ageCategory'] as $ageCategory) : ?>
                                <li><?php echo $ageCategory; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        29. Vous arrive t'il de lui/leur appliquer des produits cosmétiques ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['applyCosmeticsProducts']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        30. Si non, pourquoi ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['whyNoApplyProducts']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        31. Pour chacune des propositions, choisissez la fréquence d'utilisation à laquelle vous lui/leur appliquez des cosmétiques ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['frequencyFaceCosmeticsUse']; ?></li>
                        <li><?php echo $respondentSurvey['frequencyHairCosmeticsUse']; ?></li>
                        <li><?php echo $respondentSurvey['frequencyBodyCosmeticsUse']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        32. Où trouvez-vous ces produits ?:
                    </p>
                    <?php if ($respondentSurvey['productsLocation'] == "-") : ?>
                        <ul class="answersList">
                            <li><?php echo $respondentSurvey['productsLocation']; ?></li>
                        </ul>
                    <?php else : ?>
                        <ul class="answersList">
                            <?php foreach ($respondentSurvey['productsLocation'] as $productsLocation) : ?>
                                <?php if ($productsLocation == "Internet") : ?>
                                    <li><?php echo $productsLocation; ?>: <?php echo $respondentSurvey['internetProductsLocation']; ?></li>
                                <?php elseif ($productsLocation == "Dans une ville/région différente de la vôtre") : ?>
                                    <li><?php echo $productsLocation; ?>: <?php echo $respondentSurvey['otherTownProductsLocation']; ?></li>
                                <?php elseif ($productsLocation == "Autre") : ?>
                                    <li><?php echo $productsLocation; ?>: <?php echo $respondentSurvey['otherProductsLocation']; ?></li>
                                <?php else: ?>
                                    <li><?php echo $productsLocation; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        33. Quel mode d'utilisation préférez-vous ?
                    </p>
                    <?php if ($respondentSurvey['favouriteUseMode'] == "-") : ?>
                        <ul class="answersList">
                            <li><?php echo $respondentSurvey['favouriteUseMode']; ?></li>
                        </ul>
                    <?php else : ?>
                        <ul class="answersList">
                            <?php foreach ($respondentSurvey['favouriteUseMode'] as $favouriteUseMode) : ?>
                                <?php if ($favouriteUseMode == "Autre") : ?>
                                    <li><?php echo $favouriteUseMode; ?>: <?php echo $respondentSurvey['otherFavouriteUseMode']; ?></li>
                                <?php else: ?>
                                    <li><?php echo $favouriteUseMode; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        34. Pour ses/leurs cheveux, cochez une fourchette de prix et une fréquence qui correspond le plus à vos habitudes d'achats ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo  $respondentSurvey['hairFrequencyAndPriceUse']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        35. Pour sa/leur peau, cochez une fourchette de prix et une fréquence qui correspond le plus à vos habitudes d'achats ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['skinFrequencyAndPriceUse']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        36. Globalement, êtes-vous satisfait des soins qu'uitlisent votre/vos enfant(s) ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['childCosmeticsPurchaseSatisfaction']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        37. Pourquoi êtes-vous moyennement/pas satisfait(e) ?:
                    </p>
                    <ul class="answersList">
                        <li><?php echo $respondentSurvey['whyDissatisfactionChildCosmeticsUse']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        38. Utilisez-vous ces médias sociaux ?:
                    </p>
                    <ul class="answersList">
                        <?php foreach ($respondentSurvey['socialMediaUse'] as $socialMediaUse) : ?>
                            <?php if ($socialMediaUse == "Autre") : ?>
                                <li><?php echo $socialMediaUse; ?>: <?php echo $respondentSurvey['otherSocialMediaUse']; ?></li>
                            <?php else: ?>
                                <li><?php echo $socialMediaUse; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        39. Accepteriez-vous d'être contacté(e) pour développer vos réponses ?:
                    </p>
                    <ul class="answersList">
                        <li><span class="underline">Par téléphone:</span> <?php echo $respondentSurvey['joinPhone']; ?></li>
                        <li><span class="underline">Par mail:</span> <?php echo  $respondentSurvey['joinMail']; ?></li>
                    </ul>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        40. Si oui, renseignez votre numéro de téphone et/où votre adresse mail ?:
                    </p>
                    <ul class="answersList">
                        <li><span class="underline">Téléphone:</span> <?php echo $respondentSurvey['phoneNumber']; ?> </li>
                        <li><span class="underline">Email:</span> <?php echo $respondentSurvey['mailAddress']; ?></li>
                    </ul>

                    <button>
                        <a href="respondentsAnswersView.php?id=<?php echo $respondentId;?>">Supprimer les réponses du sondé n°<?php echo $respondentId ; ?></a>
                    </button>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="noResponsesToDisplay">
                    Pas où plus de réponses à afficher !
                </p>
            <?php endif; ?>
        </div>
        <!-- End of the block "mainContent" -->

    </div>
    <!-- End of the block "mainContainer" -->

    <!-- Beginning of the block "mainFooter" -->
    <footer id="mainFooter">

        <!-- Beginning of the block "mainFooterInformationLinkContainer" -->
        <div id="mainFooterInformationLinkContainer">

            <!-- Beginning of the block "mainFooterFirstInformationLinkContent" -->
            <section id="mainFooterFirstInformationLinkContent" class="positionningLeft">
                <p>
                    <a href="../view/contactView.php">Contact</a>
                </p>
                <img src="../pictures/round-color-img.png">
                <p>
                    <a href="../view/legalNoticesView.html">Mentions légales</a>
                </p>
            </section>
            <!-- End of the block "mainFooterFirstInformationLinkContent" -->

            <!-- Beginning of the block "mainFooterSecondInformationLinkContent" -->
            <section id="mainFooterSecondInformationLinkContent" class="positionningRight">
                <p>
                    <a href="../view/privateAccessView.php">Accés privé</a>
                </p>
                <img src="../pictures/round-color-img.png">
                <p>
                    Réalisé par<a href="http://www.lcgraphandweb.com" target="_blank"> LC GRAPH' & WEB</a>
                </p>
            </section>
            <!-- End of the block "mainFooterSecondInformationLinkContent -->

            <div class="clear"></div>

        </div>
        <!-- End of the block "mainFooterInformationLinkContainer" -->


        <figure id="mainFooterResponsiveLogoContent">
            <img src="../pictures/logo-responsive-img.png">
        </figure>

    </footer>
    <!-- End of the block "mainFooter" -->

</div>
<!-- End of the block "mainWrapper" -->

</body>
</html>
