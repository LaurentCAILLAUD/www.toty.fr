<?php
session_start();
if (isset($_SESSION['part1'])) {
    header('location:surveyAlreadySendView.html');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TOTY - La beauté personnalisée - Vous et vos habitudes d'achat</title>

    <!-- stylesheet files -->
    <link href="../css/surveyPart1ViewSmartphoneStylesheet.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../css/surveyPart1ViewTabletStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)">
    <link href="../css/surveyPart1ViewTabletLargeFormatStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 800px)">
    <link href="../css/surveyPart1ViewComputerStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">

    <!-- javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/animationMenu.js" type="application/javascript"></script>
    <script src="../js/questionDisplayManagementSurveyPart1.js" type="text/javascript"></script>
    <script src="../js/formValidationAnalyseSurveyPart1.js" type="application/javascript"></script>
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

            <h1>Vous et vos habitudes d'achat</h1>

            <p class="userIndication">* Réponse obligatoire</p>

            <form id="mainForm" action="../controller/surveyPart1ViewController.php" method="post">

                <p class="surveyQuestion">
                    1. Etes vous ?: *
                </p>
                <p>
                    <input type="radio" id="maleGender" class="outsideRadioTable" name="gender" value="Un homme">
                    <label for="maleGender">Un homme</label>
                </p>
                <p>
                    <input type="radio" id="femaleGender" class="outsideRadioTable" name="gender" value="Une femme">
                    <label for="femaleGender">Une femme</label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    2. Votre code postal et votre ville ?: *
                </p>
                <p>
                    <label for="town"></label>
                    <input type="text" id="town" name="town" maxlength="30" placeholder="Veuillez saisir votre ville ici.">
                </p>
                <p>
                    <label for="postalCode"></label>
                    <input type="text" id="postalCode" name="postalCode" maxlength="5" placeholder="Veuillez saisir votre code postal ici">
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    3. Dans quel tranche d'âge vous situez-vous ?: *
                </p>
                <p>
                    <input type="radio" id="ageChoice1" class="outsideRadioTable" name="age" value="Moins de 18 ans">
                    <label for="ageChoice1">Moins de 18 ans</label>
                </p>
                <p>
                    <input type="radio" id="ageChoice2" class="outsideRadioTable" name="age" value="De 18 à 25 ans">
                    <label for="ageChoice2">De 18 à 25 ans</label>
                </p>
                <p>
                    <input type="radio" id="ageChoice3" class="outsideRadioTable" name="age" value="De 26 à 35 ans">
                    <label for="ageChoice3">De 26 à 35 ans</label>
                </p>
                <p>
                    <input type="radio" id="ageChoice4" class="outsideRadioTable" name="age" value="De 36 à 45 ans">
                    <label for="ageChoice4">De 36 à 45 ans</label>
                </p>
                <p>
                    <input type="radio" id="ageChoice5" class="outsideRadioTable" name="age" value="DE 46 à 55 ans">
                    <label for="ageChoice5">De 46 à 60 ans</label>
                </p>
                <p>
                    <input type="radio" id="ageChoice6" class="outsideRadioTable" name="age" value="Plus de 60 ans">
                    <label for="ageChoice6">Plus de 60 ans</label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    4. Quelle est votre année de naissance ?: *
                </p>
                <p>
                    <input type="text" id="birthYear" name="birthYear" maxlength="4" placeholder="Veuillez saisir ici votre année de naissance.">
                    <label for="birthYear"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    5. Votre peau est de teinte ?: *
                </p>
                <p>
                    <input type="radio" id="skinToneChoice1" class="outsideRadioTable" name="skinTone" value="Très claire">
                    <label for="skinToneChoice1">Très claire</label>
                </p>
                <p>
                    <input type="radio" id="skinToneChoice2" class="outsideRadioTable" name="skinTone" value="Claire">
                    <label for="skinToneChoice2">Claire</label>
                </p>
                <p>
                    <input type="radio" id="skinToneChoice3" class="outsideRadioTable" name="skinTone" value="Mate">
                    <label for="skinToneChoice3">Mate</label>
                </p>
                <p>
                    <input type="radio" id="skinToneChoice4" class="outsideRadioTable" name="skinTone" value="Foncée">
                    <label for="skinToneChoice4">Foncée</label>
                </p>
                <p>
                    <input type="radio" id="skinToneChoice5" class="outsideRadioTable" name="skinTone" value="Très foncée">
                    <label for="skinToneChoice5">Très foncée</label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    6. Diriez-vous de votre peau qu'elle est ?: *
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice1" name="skinFeature[]" value="Normale">
                    <label for="skinFeatureChoice1">Normale</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice2" name="skinFeature[]" value="Sèche/très sèche">
                    <label for="skinFeatureChoice2">Sèche/très sèche (elle tiraille)</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice3" name="skinFeature[]" value="Grasse">
                    <label for="skinFeatureChoice3">Grasse (elle brille)</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice4" name="skinFeature[]" value="Mixte">
                    <label for="skinFeatureChoice4">Mixte (sèche par endroits et grasse à d'autres)</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice5" name="skinFeature[]" value="Acnéïque">
                    <label for="skinFeatureChoice5">A tendance acnéïque</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice6" name="skinFeature[]" value="Pores dilatés">
                    <label for="skinFeatureChoice6">Pores dilatés (on voit des petits trous)</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice7" name="skinFeature[]" value="Sensible">
                    <label for="skinFeatureChoice7">Sensible (présence de rougeurs et réactive aux produits)</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice8" name="skinFeature[]" value="Au teint irrégulier">
                    <label for="skinFeatureChoice8">Au teint irrégulier</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice9" name="skinFeature[]" value="Sujette aux poils incarnés">
                    <label for="skinFeatureChoice9">Sujette aux poils incarnés</label>
                </p>
                <p>
                    <input type="checkbox" id="skinFeatureChoice10" name="skinFeature[]" value="Sujette aux vergétures">
                    <label for="skinFeatureChoice10">Sujette aux vergétures</label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    7. Diriez-vous de vos cheveux qu'ils sont ?: *
                </p>
                <table>
                    <tr>
                        <th></th>
                        <th>Normaux</th>
                        <th>Gras</th>
                        <th>Secs</th>
                    </tr>
                    <tr>
                        <td>Lisses</td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice1" class="insideRadioTable" name="hairType" value="Lisses et normaux">
                            <label for="hairTypeChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice2" class="insideRadioTable" name="hairType" value="Lisses et gras">
                            <label for="hairTypeChoice2"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice3" class="insideRadioTable" name="hairType" value="Lisses et secs">
                            <label for="hairTypeChoice3"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Ondulés</td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice4" class="insideRadioTable" name="hairType" value="Ondulés et normaux">
                            <label for="hairTypeChoice4"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice5" class="insideRadioTable" name="hairType" value="Ondulés et gras">
                            <label for="hairTypeChoice5"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice6" class="insideRadioTable" name="hairType" value="Ondulés et secs">
                            <label for="hairTypeChoice6"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Bouclés</td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice7" class="insideRadioTable" name="hairType" value="Bouclés et normaux">
                            <label for="hairTypeChoice7"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice8" class="insideRadioTable" name="hairType" value="Bouclés et gras">
                            <label for="hairTypeChoice8"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice9" class="insideRadioTable" name="hairType" value="Bouclés et secs">
                            <label for="hairTypeChoice9"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Frisés</td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice10" class="insideRadioTable" name="hairType" value="Frisés et normaux">
                            <label for="hairTypeChoice10"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice11" class="insideRadioTable" name="hairType" value="Frisés et gras">
                            <label for="hairTypeChoice11"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice12" class="insideRadioTable" name="hairType" value="Frisés et secs">
                            <label for="hairTypeChoice12"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Crépus</td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice13" class="insideRadioTable" name="hairType" value="Crépus et normaux">
                            <label for="hairTypeChoice13"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice14" class="insideRadioTable" name="hairType" value="Crépus et gras">
                            <label for="hairTypeChoice14"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice15" class="insideRadioTable" name="hairType" value="Crépus et secs">
                            <label for="hairTypeChoice15"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Je n'ai pas de cheveux</td>
                        <td class="cellPosition">
                            <input type="radio" id="hairTypeChoice16" class="insideRadioTable" name="hairType" value="Je n'ai pas de cheveux">
                            <label for="hairTypeChoice16"></label>
                        </td>
                    </tr>
                </table>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    8. Utilisez-vous des produits de beauté pour ?: *
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
                        <td>Le visage (crème hydratante, soins, après rasage...)</td>
                        <td class="cellPosition">
                            <input type="radio" id="faceCosmeticUseChoice1" class="insideRadioTable" name="faceCosmeticUse" value="Visage / Tous les jours">
                            <label for="faceCosmeticUseChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="faceCosmeticUseChoice2" class="insideRadioTable" name="faceCosmeticUse"
                                   value="Visage / 1 à plusieurs fois par semaine">
                            <label for="faceCosmeticUseChoice2"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="faceCosmeticUseChoice3" class="insideRadioTable" name="faceCosmeticUse"
                                   value="Visage / Si nécessaire/lorsque j'y pense">
                            <label for="faceCosmeticUseChoice3"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="faceCosmeticUseChoice4" class="insideRadioTable" name="faceCosmeticUse" value="Visage / Jamais">
                            <label for="faceCosmeticUseChoice4"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Le corps</td>
                        <td class="cellPosition">
                            <input type="radio" id="bodyCosmeticUseChoice1" class="insideRadioTable" name="bodyCosmeticUse" value="Corps / Tous les jours">
                            <label for="bodyCosmeticUseChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="bodyCosmeticUseChoice2" class="insideRadioTable" name="bodyCosmeticUse"
                                   value="Corps / 1 à plusieurs fois par semaine">
                            <label for="bodyCosmeticUseChoice2"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="bodyCosmeticUseChoice3" class="insideRadioTable" name="bodyCosmeticUse"
                                   value="Corps / Si nécessaire/lorsque j'y pense">
                            <label for="bodyCosmeticUseChoice3"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="bodyCosmeticUseChoice4" class="insideRadioTable" name="bodyCosmeticUse" value="Corps / jamais">
                            <label for="bodyCosmeticUseChoice4"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Les cheveux</td>
                        <td class="cellPosition">
                            <input type="radio" id="hairCosmeticsUseChoice1" class="insideRadioTable" name="hairCosmeticUse" value="Cheveux / Tous les jours">
                            <label for="hairCosmeticsUseChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairCosmeticsUseChoice2" class="insideRadioTable" name="hairCosmeticUse"
                                   value="Cheveux / 1 à plusieurs fois par semaine">
                            <label for="hairCosmeticsUseChoice2"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairCosmeticsUseChoice3" class="insideRadioTable" name="hairCosmeticUse"
                                   value="Cheveux / Si nécessaire/lorsque j'y pense">
                            <label for="hairCosmeticsUseChoice3"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairCosmeticsUseChoice4" class="insideRadioTable" name="hairCosmeticUse" value="Cheveux / Jamais">
                            <label for="hairCosmeticsUseChoice4"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Les mains</td>
                        <td class="cellPosition">
                            <input type="radio" id="handCosmeticsUseChoice1" class="insideRadioTable" name="handCosmeticUse" value="Mains / Tous les jours">
                            <label for="handCosmeticsUseChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="handCosmeticsUseChoice2" class="insideRadioTable" name="handCosmeticUse"
                                   value="Mains / 1 à plusieurs fois par semaine">
                            <label for="handCosmeticsUseChoice2"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="handCosmeticsUseChoice3" class="insideRadioTable" name="handCosmeticUse"
                                   value="Mains / Si nécessaire/lorsque j'y pense">
                            <label for="handCosmeticsUseChoice3"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="handCosmeticsUseChoice4" class="insideRadioTable" name="handCosmeticUse" value="Mains / Jamais">
                            <label for="handCosmeticsUseChoice4"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Les pieds</td>
                        <td class="cellPosition">
                            <input type="radio" id="footCosmeticUseChoice1" class="insideRadioTable" name="footCosmeticUse" value="Pieds / Tous les jours">
                            <label for="footCosmeticUseChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="footCosmeticUseChoice2" class="insideRadioTable" name="footCosmeticUse"
                                   value="Pieds / 1 à plusieurs fois par semaine">
                            <label for="footCosmeticUseChoice2"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="footCosmeticUseChoice3" class="insideRadioTable" name="footCosmeticUse"
                                   value="Pieds / Si nécessaire/lorsque j'y pense">
                            <label for="footCosmeticUseChoice3"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="footCosmeticUseChoice4" class="insideRadioTable" name="footCosmeticUse" value="Pieds / Jamais">
                            <label for="footCosmeticUseChoice4"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>L'entretien de la barbe (hydratation, parfum, savon à barbe...)</td>
                        <td class="cellPosition">
                            <input type="radio" id="beardCosmeticUseChoice1" class="insideRadioTable" name="beardCosmeticUse" value="Barbe / Tous les jours">
                            <label for="beardCosmeticUseChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="beardCosmeticUseChoice2" class="insideRadioTable" name="beardCosmeticUse"
                                   value="Barbe / 1 à plusieurs fois par semaine">
                            <label for="beardCosmeticUseChoice2"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="beardCosmeticUseChoice3" class="insideRadioTable" name="beardCosmeticUse"
                                   value="Barbe / Si nécessaire/lorsque j'y pense">
                            <label for="beardCosmeticUseChoice3"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="beardCosmeticUseChoice4" class="insideRadioTable" name="beardCosmeticUse" value="Barbe / Jamais">
                            <label for="beardCosmeticUseChoice4"></label>
                        </td>
                    </tr>
                </table>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    9. Où trouvez-vous ces produits ?: *
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice1" name="purchaseLocation[]" value="En grande surface alimentaire">
                    <label for="purchaseLocationChoice1">En grande surface alimentaire</label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice2" name="purchaseLocation[]" value="En pharmacie/parapharmacie">
                    <label for="purchaseLocationChoice2">En pharmacie/parapharmacie</label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice3" name="purchaseLocation[]" value="Magasin bio">
                    <label for="purchaseLocationChoice3">Magasin bio</label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice4" name="purchaseLocation[]" value="Boutiques/épiceries de produits orientaux/exotiques">
                    <label for="purchaseLocationChoice4">Boutiques/épiceries de produits orientaux/exotiques</label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice5" name="purchaseLocation[]" value="Salons de coiffure/instituts de beauté">
                    <label for="purchaseLocationChoice5">Salons de coiffure/instituts de beauté</label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice6" name="purchaseLocation[]" value="Parfumeries">
                    <label for="purchaseLocationChoice6">Parfumeries (Séphora, Marionnaud...)</label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice7" name="purchaseLocation[]" value="Internet">
                    <label for="purchaseLocationChoice7">Internet:</label>
                </p>
                <p>
                    <input type="text" id="purchaseLocationComment1" class="choiceComment" maxlength="50" name="internetPurchaseLocation"
                           placeholder="Entrez ici le nom du site sur lequel vous faites ces achats.">
                    <label for="purchaseLocationComment1"></label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice8" name="purchaseLocation[]" value="Dans une ville/région différente de la vôtre">
                    <label for="purchaseLocationChoice8">Dans une ville/région différente de la vôtre:</label>
                </p>
                <p>
                    <input type="text" id="purchaseLocationComment2" class="choiceComment" maxlength="30" name="otherTownPurchaseLocation"
                           placeholder="Entrez ici votre ville/région d'achat.">
                    <label for="purchaseLocationComment2"></label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice9" name="purchaseLocation[]" value="Fait maison">
                    <label for="purchaseLocationChoice9">Fait maison</label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice10" name="purchaseLocation[]" value="Auprès d'un vendeur/vendeuse à domicile">
                    <label for="purchaseLocationChoice10">Auprès d'un vendeur/vendeuse à domicile</label>
                </p>
                <p>
                    <input type="checkbox" id="purchaseLocationChoice11" name="purchaseLocation[]" value="Autre">
                    <label for="purchaseLocationChoice11">Autre:</label>
                </p>
                <p>
                    <input type="text" id="purchaseLocationComment3" class="choiceComment resetChoiceCommentCssProperties"
                           maxlength="50" name="otherPurchaseLocation" placeholder="Entrez ici votre lieu d'achat.">
                    <label for="purchaseLocationComment3"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    10. Quel mode d'utilisation préférez-vous ?: *
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice1" name="preferredUseMode[]" value="Lotion">
                    <label for="preferredUseModeChoice1">Lotion</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice2" name="preferredUseMode[]" value="Spray">
                    <label for="preferredUseModeChoice2">Spray</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice3" name="preferredUseMode[]" value="Huile">
                    <label for="preferredUseModeChoice3">Huile</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice4" name="preferredUseMode[]" value="Crème">
                    <label for="preferredUseModeChoice4">Crème</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice5" name="preferredUseMode[]" value="Gel">
                    <label for="preferredUseModeChoice5">Gel</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice6" name="preferredUseMode[]" value="Mousse">
                    <label for="preferredUseModeChoice6">Mousse</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice7" name="preferredUseMode[]" value="Stick">
                    <label for="preferredUseModeChoice7">Stick</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice8" name="preferredUseMode[]" value="Beaume">
                    <label for="preferredUseModeChoice8">Beaume</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice9" name="preferredUseMode[]" value="Savon solide">
                    <label for="preferredUseModeChoice9">Savon solide (shampoing en barre, savon pour la peau...)</label>
                </p>
                <p>
                    <input type="checkbox" id="preferredUseModeChoice10" name="preferredUseMode[]" value="Autre">
                    <label for="preferredUseModeChoice10">Autre:</label>
                </p>
                <p>
                    <input type="text" id="preferredUseModeComment1" class="choiceComment resetChoiceCommentCssProperties"
                           maxlength="50" name="otherPreferredUseMode" placeholder="Entrez ici votre mode d'utilisation préféré.">
                    <label for="preferredUseModeComment1"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    11. Avez-vous besoin d'être conseillé(e) lors de vos achats ?: *
                </p>
                <p>
                    <input type="radio" id="needAdviceChoice1" class="outsideRadioTable" name="needAdvice" value="Oui">
                    <label for="needAdviceChoice1">Oui</label>
                </p>
                <p>
                    <input type="radio" id="needAdviceChoice2" class="outsideRadioTable" name="needAdvice" value="Non">
                    <label for="needAdviceChoice2">Non</label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    12. Pourquoi ?: *
                </p>
                <p>
                    <textarea id="whyNeedAdvice" maxlength="100" name="whyNeedAdvice"
                              placeholder="Décrivez ici pourquoi vous avez ou non besoin de conseils lors de vos achats."></textarea>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    13. Rencontrez-vous des difficultés à trouver des produits adaptés ?: *
                </p>
                <table>
                    <tr>
                        <th></th>
                        <th>Oui</th>
                        <th>Non</th>
                    </tr>
                    <tr>
                        <td>A votre peau</td>
                        <td class="cellPosition">
                            <input type="radio" id="skinProductsDifficultiesChoice1" class="insideRadioTable" name="skinProductsDifficulties" value="Oui">
                            <label for="skinProductsDifficultiesChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="skinProductsDifficultiesChoice2" class="insideRadioTable" name="skinProductsDifficulties" value="Non">
                            <label for="skinProductsDifficultiesChoice2"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>A vos cheveux</td>
                        <td class="cellPosition">
                            <input type="radio" id="hairProductsDifficultiesChoice1" class="insideRadioTable" name="hairProductsDifficulties" value="Oui">
                            <label for="hairProductsDifficultiesChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="hairProductsDifficultiesChoice2" class="insideRadioTable" name="hairProductsDifficulties" value="Non">
                            <label for="hairProductsDifficultiesChoice2"></label>
                        </td>
                    </tr>
                </table>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <div class="optionalQuestion">
                    <p class="surveyQuestion">
                        14. Si oui, pourquoi ?: *
                    </p>
                    <p>
                        <input type="checkbox" id="whyProductsDifficultiesChoice1" name="whyProductsDifficulties[]" value="Je ne trouve pas de magasin">
                        <label for="whyProductsDifficultiesChoice1">Je ne trouve pas de magasin</label>
                    </p>
                    <p>
                        <input type="checkbox" id="whyProductsDifficultiesChoice2" name="whyProductsDifficulties[]"
                               value="Je manque d'informations/de conseils">
                        <label for="whyProductsDifficultiesChoice2">Je manque d'informations/de conseils</label>
                    </p>
                    <p>
                        <input type="checkbox" id="whyProductsDifficultiesChoice3" name="whyProductsDifficulties[]" value="Autre">
                        <label for="whyProductsDifficultiesChoice3">Autre:</label>
                    </p>
                    <p>
                        <input type="text" class="choiceComment resetChoiceCommentCssProperties" id="whyProductsDifficultiesComment1"
                               maxlength="50" name="otherWhyProductsDifficulties" placeholder="Entrez ici pourquoi vous rencontrez-vous des difficultés.">
                        <label for="whyProductsDifficultiesComment1"></label>
                    </p>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                </div>

                <p class="surveyQuestion">
                    15. Vous arrive t'il de modifier l'aspect de vos cheveux avec les propositions suivantes ?: *
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice1" name="changeHairAppearance[]" value="Coloration végétale">
                    <label for="changeHairAppearanceChoice1">Coloration végétale (type hénné...)</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice2" name="changeHairAppearance[]" value="Coloration chimique">
                    <label for="changeHairAppearanceChoice2">Coloration chimique</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice3" name="changeHairAppearance[]" value="Décoloration douce">
                    <label for="changeHairAppearanceChoice3">Décoloration douce (citron, miel, poudre à l'argile...)</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice4" name="changeHairAppearance[]" value="Décoloration chimique">
                    <label for="changeHairAppearanceChoice4">Décoloration chimique</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice5" name="changeHairAppearance[]" value="Défrisant végétal">
                    <label for="changeHairAppearanceChoice5">Défrisant végétal (gamme phyto...)</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice6" name="changeHairAppearance[]" value="Défrisant chimique">
                    <label for="changeHairAppearanceChoice6">Défrisant chimique</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice7" name="changeHairAppearance[]" value="Curly">
                    <label for="changeHairAppearanceChoice7">Curly</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice8" name="changeHairAppearance[]" value="Perruques cheveux vierges">
                    <label for="changeHairAppearanceChoice8">Perruques/tissage cheveux vierges (au moins 80% de cheveux naturels)</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice9" name="changeHairAppearance[]" value="Perruques synthétiques">
                    <label for="changeHairAppearanceChoice9">Perruques synthétiques</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice10" name="changeHairAppearance[]"
                           value="Rajouts/postiches/extensions vierges">
                    <label for="changeHairAppearanceChoice10">Rajouts/postiches/extensions vierges (au moins 80% de cheveux naturels)</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice11" name="changeHairAppearance[]"
                           value="Rajouts/postiches/extensions synthétiques">
                    <label for="changeHairAppearanceChoice11">Rajouts/postiches/extensions synthétiques</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice12" name="changeHairAppearance[]" value="Non">
                    <label for="changeHairAppearanceChoice12">Non je ne modifie pas l'aspect de mes cheveux</label>
                </p>
                <p>
                    <input type="checkbox" id="changeHairAppearanceChoice13" name="changeHairAppearance[]" value="Autre">
                    <label for="changeHairAppearanceChoice13">Autre:</label>
                </p>
                <p>
                    <input type="text" id="changeHairAppearanceComment1" class="choiceComment resetChoiceCommentCssProperties"
                           maxlength="50" name="otherChangeHairAppearance" placeholder="Entrez ici votre mode de modification.">
                    <label for="changeHairAppearanceComment1"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <div class="optionalQuestion">
                    <p class="surveyQuestion">
                        16. S'il vous arrive de modifier l'aspect de vos cheveux, où vous rendez-vous ?: *
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice1" name="placeChangeHairAppearance[]"
                               value="En grande surface alimentaire">
                        <label for="placeChangeHairAppearanceChoice1">En grande surface alimentaire</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice2" name="placeChangeHairAppearance[]"
                               value="En pharmacie/parapharmacie">
                        <label for="placeChangeHairAppearanceChoice2">En pharmacie/parapharmacie</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice3" name="placeChangeHairAppearance[]" value="Magasin bio">
                        <label for="placeChangeHairAppearanceChoice3">Magasin bio</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice4" name="placeChangeHairAppearance[]"
                               value="Boutiques/épiceries de produits orientaux/exotiques">
                        <label for="placeChangeHairAppearanceChoice4">Boutiques/épiceries de produits orientaux/exotiques</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice5" name="placeChangeHairAppearance[]"
                               value="Salons de coiffure/instituts de beauté">
                        <label for="placeChangeHairAppearanceChoice5">Salons de coiffure/instituts de beauté</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice6" name="placeChangeHairAppearance[]" value="Internet">
                        <label for="placeChangeHairAppearanceChoice6">Internet</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice7" name="placeChangeHairAppearance[]"
                               value="Dans une ville/région différente de la vôtre">
                        <label for="placeChangeHairAppearanceChoice7">Dans une ville/région différente de la vôtre</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice8" name="placeChangeHairAppearance[]" value="Fait maison">
                        <label for="placeChangeHairAppearanceChoice8">Fait maison</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice9" name="placeChangeHairAppearance[]"
                               value="Auprès d'un vendeur/vendeuse à domicile">
                        <label for="placeChangeHairAppearanceChoice9">Auprès d'un vendeur/vendeuse à domicile</label>
                    </p>
                    <p>
                        <input type="checkbox" id="placeChangeHairAppearanceChoice10" name="placeChangeHairAppearance[]" value="Autre">
                        <label for="placeChangeHairAppearanceChoice10">Autre:</label>
                    </p>
                    <p>
                        <input type="text" class="choiceComment resetChoiceCommentCssProperties" id="placeChangeHairAppearanceComment1"
                               maxlength="50" name="otherPlaceChangeHairAppearance" placeholder="Entrez ici votre lieu d'achat.">
                        <label for="placeChangeHairAppearanceComment1"></label>
                    </p>
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                </div>

                <p class="surveyQuestion">
                    17. Concernant votre peau, cochez la fourchette de prix et la fréquence qui correspond le plus à vos habitudes d'achats: *
                </p>
                <table>
                    <tr>
                        <th></th>
                        <th>Environ chaque semaine</th>
                        <th>Environ tous les mois</th>
                        <th>Environ tous les trimestres</th>
                        <th>Quelques fois par an</th>
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
                        <td class="cellPosition">
                            <input type="radio" id="skinPriceAndFrequencyUseChoice4" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                   value="Moins de 5€ / Quelques fois par an">
                            <label for="skinPriceAndFrequencyUseChoice4"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="skinPriceAndFrequencyUseChoice8" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                   value="Entre 6 et 15€ / Quelques fois par an">
                            <label for="skinPriceAndFrequencyUseChoice8"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="skinPriceAndFrequencyUseChoice12" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                   value="Entre 16 et 30€ / Quelques fois par an">
                            <label for="skinPriceAndFrequencyUseChoice12"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="skinPriceAndFrequencyUseChoice16" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                   value="Entre 31 et 55€ / Quelques fois par an">
                            <label for="skinPriceAndFrequencyUseChoice16"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="skinPriceAndFrequencyUseChoice20" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                   value="Entre 56 et 65€ / Quelques fois par an">
                            <label for="skinPriceAndFrequencyUseChoice20"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="skinPriceAndFrequencyUseChoice24" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                   value="Entre 66 et 100€ / Quelques fois par an">
                            <label for="skinPriceAndFrequencyUseChoice24"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="skinPriceAndFrequencyUseChoice28" class="insideRadioTable" name="skinPriceAndFrequencyUse"
                                   value="Au delà de 100€ / Quelques fois par an">
                            <label for="skinPriceAndFrequencyUseChoice28"></label>
                        </td>
                    </tr>
                </table>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    18. Concernant vos cheveux, cochez la fourchette de prix et la fréquence qui correspond le plus à vos habitudes d'achats: *
                </p>
                <table>
                    <tr>
                        <th></th>
                        <th>Environ chaque semaine</th>
                        <th>Environ tous les mois</th>
                        <th>Environ tous les trimestres</th>
                        <th>Quelques fois par an</th>
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
                        <td class="cellPosition">
                            <input type="radio" id="hairPriceAndFrequencyUseChoice4" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                   value="Moins de 5€ / Quelques fois par an">
                            <label for="hairPriceAndFrequencyUseChoice4"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="hairPriceAndFrequencyUseChoice8" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                   value="Entre 6 et 15€ / Quelques fois par an">
                            <label for="hairPriceAndFrequencyUseChoice8"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="hairPriceAndFrequencyUseChoice12" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                   value="Entre 16 et 30€ / Quelques fois par an">
                            <label for="hairPriceAndFrequencyUseChoice12"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="hairPriceAndFrequencyUseChoice16" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                   value="Entre 31 et 55€ / Quelques fois par an">
                            <label for="hairPriceAndFrequencyUseChoice16"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="hairPriceAndFrequencyUseChoice20" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                   value="Entre 56 et 65€ / Quelques fois par an">
                            <label for="hairPriceAndFrequencyUseChoice20"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="hairPriceAndFrequencyUseChoice24" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                   value="Entre 66 et 100€ / Quelques fois par an">
                            <label for="hairPriceAndFrequencyUseChoice24"></label>
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
                        <td class="cellPosition">
                            <input type="radio" id="hairPriceAndFrequencyUseChoice28" class="insideRadioTable" name="hairPriceAndFrequencyUse"
                                   value="Au delà de 100€ / Quelques fois par an">
                            <label for="hairPriceAndFrequencyUseChoice28"></label>
                        </td>
                    </tr>
                </table>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    19. Globalement êtes-vous satisfait(e) des cosmétiques que vous achetez ?: *
                </p>
                <p>
                    <input type="radio" id="cosmeticsPurchaseSatisfactionChoice1" class="outsideRadioTable" name="cosmeticsPurchaseSatisfaction"
                           value="Oui">
                    <label for="cosmeticsPurchaseSatisfactionChoice1">Oui</label>
                </p>
                <p>
                    <input type="radio" id="cosmeticsPurchaseSatisfactionChoice2" class="outsideRadioTable" name="cosmeticsPurchaseSatisfaction"
                           value="Moyennement">
                    <label for="cosmeticsPurchaseSatisfactionChoice2">Moyennement</label>
                </p>
                <p>
                    <input type="radio" id="cosmeticsPurchaseSatisfactionChoice3" class="outsideRadioTable" name="cosmeticsPurchaseSatisfaction"
                           value="Non">
                    <label for="cosmeticsPurchaseSatisfactionChoice3">Non</label>
                </p>

                <div class="optionalQuestion">
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                    <p class="surveyQuestion">
                        20. Pourquoi êtes-vous moyennement/pas satisfait(e) ?:
                    </p>
                    <p>
                        <textarea id="whyDissatisfactionCosmeticsUse"  maxlength="100" name="whyDissatisfactionCosmeticsUse"
                                  placeholder="Décrivez ici pourquoi vous êtes moyennement ou pas satisfait des cosmétiques que vous achetez."></textarea>
                    </p>
                </div>

                <p>
                    <input type="submit" id='surveyPart1Submit' name="surveyPartOneSubmit" value="Suite">
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
