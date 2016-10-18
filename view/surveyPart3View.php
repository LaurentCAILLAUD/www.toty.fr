<?php
session_start();
if (isset($_SESSION['part3'])) {
    header('location:surveyAlreadySendView.html');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TOTY - La beauté personnalisée - Votre/Vos enfant(s)</title>

    <!-- stylesheet files -->
    <link href="../css/surveyPart3ViewSmartphoneStylesheet.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../css/surveyPart3ViewTabletStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)">
    <link href="../css/surveyPart3ViewTabletLargeFormatStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 800px)">
    <link href="../css/surveyPart3ViewComputerStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">

    <!-- javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/animationMenu.js" type="text/javascript"></script>
    <script src="../js/questionDisplayManagementSurveyPart3.js" type="text/javascript"></script>
    <script src="../js/formValidationAnalyseSurveyPart3.js" type="text/javascript"></script>
    <noscript>
        <meta http-equiv="Refresh" content="0; URL=../view/javascriptDisabledView.html">
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

            <h1>Votre/vos enfant(s)</h1>

            <p class="userIndication">* Réponse obligatoire</p>

            <form id="mainForm" action="../controller/surveyPart3ViewController.php" method="post">
                <p class="surveyQuestion">
                    27. Avez-vous un/des enfant(s) ?: *
                </p>
                <p>
                    <input type="radio" id="hasChildChoice1" class="outsideRadioTable" name="hasChild" value="Oui">
                    <label for="hasChildChoice1">Oui</label>
                </p>
                <p>
                    <input type="radio" id="hasChildChoice2" class="outsideRadioTable" name="hasChild" value="Non">
                    <label for="hasChildChoice2">Non</label>
                </p>

                <div class="optionalQuestion">
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                    <p class="surveyQuestion">
                        28. Dans quelle tranche d'âge se situe votre/vos enfants ?: *
                    </p>
                    <p>
                        <input type="checkbox" id="ageCategoryChoice1" name="ageCategory[]" value="Moins de 1 ans">
                        <label for="ageCategoryChoice1">Moins de 1 ans</label>
                    </p>
                    <p>
                        <input type="checkbox" id="ageCategoryChoice2" name="ageCategory[]" value="De 1 à 3 ans">
                        <label for="ageCategoryChoice2">De 1 à 3 ans</label>
                    </p>
                    <p>
                        <input type="checkbox" id="ageCategoryChoice3" name="ageCategory[]" value="De 4 à 7 ans">
                        <label for="ageCategoryChoice3">De 4 à 7 ans</label>
                    </p>
                    <p>
                        <input type="checkbox" id="ageCategoryChoice4" name="ageCategory[]" value="De 8 à 12 ans">
                        <label for="ageCategoryChoice4">De 8 à 12 ans</label>
                    </p>
                    <p>
                        <input type="checkbox" id="ageCategoryChoice5" name="ageCategory[]" value="Plus de 12 ans">
                        <label for="ageCategoryChoice5">Plus de 12 ans</label>
                    </p>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                </div>

                <div class="optionalQuestion">
                    <p class="surveyQuestion">
                        29. Vous arrive-t'il de lui/leur appliquer des produits cosmétiques (peau et cheveux Ex: créme hydratante, crème solaire,
                        spray démêlant..) ?: *
                    </p>
                    <p>
                        <input type="radio" id="applyCosmeticsProductsChoice1" class="outsideRadioTable" name="applyCosmeticsProducts" value="Oui">
                        <label for="applyCosmeticsProductsChoice1">Oui</label>
                    </p>
                    <p>
                        <input type="radio" id="applyCosmeticsProductsChoice2" class="outsideRadioTable" name="applyCosmeticsProducts" value="Non">
                        <label for="applyCosmeticsProductsChoice2">Non</label>
                    </p>
                    <p>
                        <input type="radio" id="applyCosmeticsProductsChoice3" class="outsideRadioTable" name="applyCosmeticsProducts"
                               value="Je ne sais pas car autre parent">
                        <label for="applyCosmeticsProductsChoice3">Je ne sais pas car c'est l'autre parent qui s'en occupe</label>
                    </p>
                </div>

                <div class="optionalQuestion">
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>

                    <p class="surveyQuestion">
                        30. Si non, pourquoi ?: *
                    </p>
                    <p>
                        <textarea id="whyNoApplyProducts" maxlength="100" name="whyNoApplyProducts"
                                  placeholder="Décrivez ici pourquoi vous n'appliquez pas de produits cosmétiques sur votre/vos enfant(s)."></textarea>
                    </p>
                </div>

                <div class="optionalQuestion">
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>


                    <p class="surveyQuestion">
                        31. Pour chaque proposition, choisissez la fréquence d'utilisation à laquelle vous lui/leur appliquez des cosmétiques ?: *
                    </p>
                    <table>
                        <tr>
                            <th></th>
                            <th>Tous les jours</th>
                            <th>1 à plusieurs fois par semaine</th>
                            <th>Si nécessaire où lorsque j'y pense</th>
                            <th>Jamais</th>
                        </tr>
                        <tr>
                            <td>Pour le visage</td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyFaceCosmeticUseChoice1" class="insideRadioTable" name="frequencyFaceCosmeticUse"
                                       value="Visage / Tous les jours">
                                <label for="frequencyFaceCosmeticUseChoice1"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyFaceCosmeticUseChoice2" class="insideRadioTable" name="frequencyFaceCosmeticUse"
                                       value="Visage / 1 à plusieurs fois par semaine">
                                <label for="frequencyFaceCosmeticUseChoice2"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyFaceCosmeticUseChoice3" class="insideRadioTable" name="frequencyFaceCosmeticUse"
                                       value="Visage / Si nécessaire/lorsque j'y pense">
                                <label for="frequencyFaceCosmeticUseChoice3"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyFaceCosmeticUseChoice4" class="insideRadioTable" name="frequencyFaceCosmeticUse"
                                       value="Visage / Jamais">
                                <label for="frequencyFaceCosmeticUseChoice4"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>Pour les cheveux</td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyHairCosmeticUseChoice1" class="insideRadioTable" name="frequencyHairCosmeticUse"
                                       value="Cheveux / Tous les jours">
                                <label for="frequencyHairCosmeticUseChoice1"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyHairCosmeticUseChoice2" class="insideRadioTable" name="frequencyHairCosmeticUse"
                                       value="Cheveux / 1 à plusieurs fois par semaine">
                                <label for="frequencyHairCosmeticUseChoice2"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyHairCosmeticUseChoice3" class="insideRadioTable" name="frequencyHairCosmeticUse"
                                       value="Cheveux / Si nécessaire/lorsque j'y pense">
                                <label for="frequencyHairCosmeticUseChoice3"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyHairCosmeticUseChoice4" class="insideRadioTable" name="frequencyHairCosmeticUse"
                                       value="Cheveux / Jamais">
                                <label for="frequencyHairCosmeticUseChoice4"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>Pour le corps</td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyBodyCosmeticsUseChoice1" class="insideRadioTable" name="frequencyBodyCosmeticUse"
                                       value="Corps / Tous les jours">
                                <label for="frequencyBodyCosmeticsUseChoice1"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyBodyCosmeticsUseChoice2" class="insideRadioTable" name="frequencyBodyCosmeticUse"
                                       value="Corps / 1 à plusieurs fois par semaine">
                                <label for="frequencyBodyCosmeticsUseChoice2"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyBodyCosmeticsUseChoice3" class="insideRadioTable" name="frequencyBodyCosmeticUse"
                                       value="Corps / Si nécessaire/lorsque j'y pense">
                                <label for="frequencyBodyCosmeticsUseChoice3"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="frequencyBodyCosmeticsUseChoice4" class="insideRadioTable" name="frequencyBodyCosmeticUse"
                                       value="Corps / Jamais">
                                <label for="frequencyBodyCosmeticsUseChoice4"></label>
                            </td>
                        </tr>
                    </table>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                </div>

                <div class="optionalQuestion">
                    <p class="surveyQuestion">
                        32. Où trouvez-vous ces produits ?: *
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice1" name="productLocation[]" value="En grande surface alimentaire">
                        <label for="productLocationChoice1">En grande surface alimentaire</label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice2" name="productLocation[]" value="En pharmacie/parapharmacie">
                        <label for="productLocationChoice2">En pharmacie/parapharmacie</label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice3" name="productLocation[]" value="Magasin bio">
                        <label for="productLocationChoice3">Magasin bio</label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice4" name="productLocation[]" value="Boutiques/épiceries de produits orientaux/exotiques">
                        <label for="productLocationChoice4">Boutiques/épiceries de produits orientaux/exotiques</label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice5" name="productLocation[]" value="Salons de coiffure/instituts de beauté">
                        <label for="productLocationChoice5">Salons de coiffure/instituts de beauté</label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice6" name="productLocation[]" value="Parfumeries">
                        <label for="productLocationChoice6">Parfumeries (Séphora, Marionnaud...°</label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice7" name="productLocation[]" value="Internet">
                        <label for="productLocationChoice7">Internet:</label>
                    </p>
                    <p>
                        <input type="text" id="productLocationComment1" class="choiceComment" maxlength="50" name="internetProductLocation"
                               placeholder="Entrez ici le nom du site sur lequel vous faites ces achats.">
                        <label for="productLocationComment1"></label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice8" name="productLocation[]" value="Dans une ville/région différente de la vôtre">
                        <label for="productLocationChoice8">Dans une ville/région différente de la vôtre:</label>
                    </p>
                    <p>
                        <input type="text" id="productLocationComment2" class="choiceComment" maxlength="50" name="otherTownProductLocation"
                               placeholder="Entrez ici votre ville/région d'achat.">
                        <label for="productLocationComment2"></label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice9" name="productLocation[]" value="Auprès d'un vendeur/vendeuse à domicile">
                        <label for="productLocationChoice9">Auprès d'un vendeur/vendeuse à domicile</label>
                    </p>
                    <p>
                        <input type="checkbox" id="productLocationChoice10" name="productLocation[]" value="Autre">
                        <label for="productLocationChoice10">Autre:</label>
                    </p>
                    <p>
                        <input type="text" id="productLocationComment3" class="choiceComment resetChoiceCommentCssProperties"
                               name="otherProductLocation" maxlength="50" placeholder="Entrez ici votre lieu d'achat.">
                        <label for="productLocationComment3"></label>
                    </p>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                </div>

                <div class="optionalQuestion">
                    <p class="surveyQuestion">
                        33. Quel mode d'utilisation préférez-vous ?: *
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice1" name="favouriteUseMode[]" value="Lotion">
                        <label for="favouriteUseModeChoice1">Lotion</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice2" name="favouriteUseMode[]" value="Huile">
                        <label for="favouriteUseModeChoice2">Huile</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice3" name="favouriteUseMode[]" value="Crème">
                        <label for="favouriteUseModeChoice3">Crème</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice4" name="favouriteUseMode[]" value="Spray">
                        <label for="favouriteUseModeChoice4">Spray</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice5" name="favouriteUseMode[]" value="Gel">
                        <label for="favouriteUseModeChoice5">Gel</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice6" name="favouriteUseMode[]" value="Mousse">
                        <label for="favouriteUseModeChoice6">Mousse</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice7" name="favouriteUseMode[]" value="Beaume">
                        <label for="favouriteUseModeChoice7">Beaume</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice8" name="favouriteUseMode[]" value="Stick">
                        <label for="favouriteUseModeChoice8">Stick</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice9" name="favouriteUseMode[]" value="Savon solide">
                        <label for="favouriteUseModeChoice9">Savon solide (shampoing en barre, savon pour la peau...)</label>
                    </p>
                    <p>
                        <input type="checkbox" id="favouriteUseModeChoice10" name="favouriteUseMode[]" value="Autre">
                        <label for="favouriteUseModeChoice10">Autre:</label>
                    </p>
                    <p>
                        <input type="text" class="choiceComment resetChoiceCommentCssProperties" id="favouriteUseModeComment1"
                               maxlength="50" name="otherFavouriteModeUse" placeholder="Entrez ici le mode d'utilisation que vous préférez.">
                        <label for="favouriteUseModeComment1"></label>
                    </p>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                </div>

                <div class="optionalQuestion">
                    <p class="surveyQuestion">
                        34. Concernant ses/leurs cheveux, cochez la fourchette de prix et la fréquence qui correspond le plus à vos habitudes d'achats: *
                    </p>
                    <table>
                        <tr>
                            <th></th>
                            <th>Environ chaque semaine</th>
                            <th>Environ tous les mois</th>
                            <th>Environ tous les trimestres</th>
                        </tr>
                        <tr>
                            <td>Moins de 5€</td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice1" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Moins de 5€ / Environ chaque semaine">
                                <label for="hairPriceAndFrequencyUseChoice1"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice2" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Moins de 5€ / Environ tous les mois">
                                <label for="hairPriceAndFrequencyUseChoice2"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice3" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Moins de 5€ / Environ tous les trimestres">
                                <label for="hairPriceAndFrequencyUseChoice3"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 6 à 15€</td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice5" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 6 et 15€ / Environ chaque semaine">
                                <label for="hairPriceAndFrequencyUseChoice5"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice6" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 6 et 15€ / Environ tous les mois">
                                <label for="hairPriceAndFrequencyUseChoice6"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice7" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 6 et 15€ / Environ tous les trimestres">
                                <label for="hairPriceAndFrequencyUseChoice7"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 16 à 30€</td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice9" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 16 et 30€ / Environ chaque semaine">
                                <label for="hairPriceAndFrequencyUseChoice9"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice10" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 16 et 30€ / Environ tous les mois">
                                <label for="hairPriceAndFrequencyUseChoice10"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice11" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 16 et 30€ / Environ tous les trimestres">
                                <label for="hairPriceAndFrequencyUseChoice11"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 31 à 55€</td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice13" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 31 et 55€ / Environ chaque semaine">
                                <label for="hairPriceAndFrequencyUseChoice13"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice14" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 31 et 55€ / Environ tous les mois">
                                <label for="hairPriceAndFrequencyUseChoice14"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice15" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 31 et 55€ / Environ tous les trimestres">
                                <label for="hairPriceAndFrequencyUseChoice15"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 56 à 65€</td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice17" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 56 et 65€ / Environ chaque semaine">
                                <label for="hairPriceAndFrequencyUseChoice17"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice18" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 56 et 65€ / Environ tous les mois">
                                <label for="hairPriceAndFrequencyUseChoice18"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice19" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 56 et 65€ / Environ tous les trimestres">
                                <label for="hairPriceAndFrequencyUseChoice19"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 66 à 100€</td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice21" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 66 et 100€ / Environ chaque semaine">
                                <label for="hairPriceAndFrequencyUseChoice21"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice22" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 66 et 100€ / Envrion tous les mois">
                                <label for="hairPriceAndFrequencyUseChoice22"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice23" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Entre 66 et 100€ / Environ tous les trimestres">
                                <label for="hairPriceAndFrequencyUseChoice23"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>Au delà de 100€</td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice25" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Au delà de 100€ / Environ chaque semaine">
                                <label for="hairPriceAndFrequencyUseChoice25"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice26" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Au delà de 100€ / Environ tous les mois">
                                <label for="hairPriceAndFrequencyUseChoice26"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="hairPriceAndFrequencyUseChoice27" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                       value="Au delà de 100€ / Environ tous les trimestres">
                                <label for="hairPriceAndFrequencyUseChoice27"></label>
                            </td>
                        </tr>
                    </table>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                </div>

                <div class="optionalQuestion">
                    <p class="surveyQuestion">
                        35. Concernant sa/leur peau, cochez la fourchette de prix et la fréquence qui correspond le plus à vos habitudes d'achats: *
                    </p>
                    <table>
                        <tr>
                            <th></th>
                            <th>Environ chaque semaine</th>
                            <th>Environ tous les mois</th>
                            <th>Environ tous les trimestres</th>
                        </tr>
                        <tr>
                            <td>Moins de 5€</td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice1" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Moins de 5€ / Environ chaque semaine">
                                <label for="skinPriceAndFrequencyUseChoice1"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice2" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Moins de 5€ / Environ tous les mois">
                                <label for="skinPriceAndFrequencyUseChoice2"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice3" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Moins de 5€ / Environ tous les trimestres">
                                <label for="skinPriceAndFrequencyUseChoice3"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 6 à 15€</td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice5" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 6 et 15€ / Environ chaque semaine">
                                <label for="skinPriceAndFrequencyUseChoice5"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice6" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 6 et 15€ / Environ tous les mois">
                                <label for="skinPriceAndFrequencyUseChoice6"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice7" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 6 et 15€ / Environ tous les trimestres">
                                <label for="skinPriceAndFrequencyUseChoice7"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 16 à 30€</td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice9" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 16 et 30€ / Environ chaque semaine">
                                <label for="skinPriceAndFrequencyUseChoice9"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice10" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 16 et 30€ / Environ tous les mois">
                                <label for="skinPriceAndFrequencyUseChoice10"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice11" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 16 et 30€ / Environ tous les trimestres">
                                <label for="skinPriceAndFrequencyUseChoice11"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 31 à 55€</td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice13" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 31 et 55€ / Environ chaque semaine">
                                <label for="skinPriceAndFrequencyUseChoice13"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice14" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 31 et 55€ / Environ tous les mois">
                                <label for="skinPriceAndFrequencyUseChoice14"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice15" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 31 et 55€ / Environ tous les trimestres">
                                <label for="skinPriceAndFrequencyUseChoice15"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 56 à 65€</td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice17" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 56 et 65€ / Environ chaque semaine">
                                <label for="skinPriceAndFrequencyUseChoice17"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice18" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 56 et 65€ / Environ tous les mois">
                                <label for="skinPriceAndFrequencyUseChoice18"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice19" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 56 et 65€ / Environ tous les trimestres">
                                <label for="skinPriceAndFrequencyUseChoice19"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>De 66 à 100€</td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice21" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 66 et 100€ / Environ chaque semaine">
                                <label for="skinPriceAndFrequencyUseChoice21"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice22" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 66 et 100€ / Envrion tous les mois">
                                <label for="skinPriceAndFrequencyUseChoice22"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice23" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Entre 66 et 100€ / Environ tous les trimestres">
                                <label for="skinPriceAndFrequencyUseChoice23"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>Au delà de 100€</td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice25" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Au delà de 100€ / Environ chaque semaine">
                                <label for="skinPriceAndFrequencyUseChoice25"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice26" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Au delà de 100€ / Environ tous les mois">
                                <label for="skinPriceAndFrequencyUseChoice26"></label>
                            </td>
                            <td class="cellPosition">
                                <input type="radio" id="skinPriceAndFrequencyUseChoice27" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                       value="Au delà de 100€ / Environ tous les trimestres">
                                <label for="skinPriceAndFrequencyUseChoice27"></label>
                            </td>
                        </tr>
                    </table>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                </div>

                <div class="optionalQuestion">
                    <p class="surveyQuestion">
                        36. Globalement êtes-vous satisfait(e) des cosmétiques que vous achetez ?: *
                    </p>
                    <p>
                        <input type="radio" id="childCosmeticsPurchaseSatisfactionChoice1" class="outsideRadioTable"
                               name="childCosmeticsPurchaseSatisfaction" value="Oui">
                        <label for="childCosmeticsPurchaseSatisfactionChoice1">Oui</label>
                    </p>
                    <p>
                        <input type="radio" id="childCosmeticsPurchaseSatisfactionChoice2" class="outsideRadioTable"
                               name="childCosmeticsPurchaseSatisfaction" value="Moyennement">
                        <label for="childCosmeticsPurchaseSatisfactionChoice2">Moyennement</label>
                    </p>
                    <p>
                        <input type="radio" id="childCosmeticsPurchaseSatisfactionChoice3" class="outsideRadioTable"
                               name="childCosmeticsPurchaseSatisfaction" value="Non">
                        <label for="childCosmeticsPurchaseSatisfactionChoice3">Non</label>
                    </p>
                </div>

                <div class="optionalQuestion">
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                    <p class="surveyQuestion">
                        37. Pourquoi êtes-vous moyennement/pas satisfait(e) ?:
                    </p>
                    <p>
                        <textarea id="whyDissatisfactionChildCosmeticsUse" maxlength="100" name="whyDissatisfactionChildCosmeticsUse"
                                  placeholder="Décrivez ici pourquoi vous êtes moyennement ou pas satisfait des cosmétiques pour votre/vos enfants."></textarea>
                    </p>
                </div>

                <p>
                    <input type="submit" id='surveyPart3Submit' name="surveyPartThreeSubmit" value="Suite">
                </p>
            </form>
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
                    <a href="contactView.php">Contact</a>
                </p>
                <img src="../pictures/round-color-img.png">
                <p>
                    <a href="legalNoticesView.html">Mentions légales</a>
                </p>
            </section>
            <!-- End of the block "mainFooterFirstInformationLinkContent" -->

            <!-- Beginning of the block "mainFooterSecondInformationLinkContent" -->
            <section id="mainFooterSecondInformationLinkContent" class="positionningRight">
                <p>
                    <a href="privateAccessView.php">Accés privé</a>
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