<?php
session_start();
if (isset($_SESSION['part2'])) {
    header('location:surveyAlreadySendView.html');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TOTY - La beauté personnalisée - Vos avis</title>

    <!-- stylesheet files -->
    <link href="../css/surveyPart2ViewSmartphoneStylesheet.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../css/surveyPart2ViewTabletStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)">
    <link href="../css/surveyPart2ViewTabletLargeFormatStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 800px)">
    <link href="../css/surveyPart2ViewComputerStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">

    <!-- javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/animationMenu.js" type="text/javascript"></script>
    <script src="../js/questionDisplayManagementSurveyPart2.js" type="text/javascript"></script>
    <script src="../js/formValidationAnalyseSurveyPart2.js" type="text/javascript"></script>
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

            <h1>Vos avis</h1>

            <p class="userIndication">* Réponse obligatoire</p>

            <form id="mainForm" action="../controller/surveyPart2ViewController.php" method="post">
                <p class="surveyQuestion">
                    21. Qu'attendez-vous d'un soin capillaire ?: *
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice1" name="hairCareWaiting[]" value="Hydratation">
                    <label for="hairCareWaitingChoice1">Hydratation</label>
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice2" name="hairCareWaiting[]" value="Souplesse">
                    <label for="hairCareWaitingChoice2">Souplesse</label>
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice3" name="hairCareWaiting[]" value="Coloration préservée">
                    <label for="hairCareWaitingChoice3">Coloration préservée</label>
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice4" name="hairCareWaiting[]" value="Anti-casse">
                    <label for="hairCareWaitingChoice4">Anti-casse</label>
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice5" name="hairCareWaiting[]" value="Un parfun agréable">
                    <label for="hairCareWaitingChoice5">Un parfun agréable</label>
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice6" name="hairCareWaiting[]" value="Anti-regraissant">
                    <label for="hairCareWaitingChoice6">Anti-regraissant</label>
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice7" name="hairCareWaiting[]" value="Démélant">
                    <label for="hairCareWaitingChoice7">Démélant</label>
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice8" name="hairCareWaiting[]" value="Stylisant">
                    <label for="hairCareWaitingChoice8">Stylisant (tenue de la coupe, les cheveux qui gonflent, les boucles qui s'affaissent dans la journée...)
                    </label>
                </p>
                <p>
                    <input type="checkbox" id="hairCareWaitingChoice9" name="hairCareWaiting[]" value="Autre">
                    <label for="hairCareWaitingChoice9">Autre:</label>
                </p>
                <p>
                    <input type="text" class="choiceComment resetChoiceCommentCssProperties" id="hairCareWaitingComment1"
                           maxlength="50" name="otherHairCareWaiting" placeholder="Entrez ici ce que vous attendez d'un soin capillaire">
                    <label for="hairCareWaitingComment1"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    22. Qu'attendez-vous d'un soin visage/corps ?: *
                </p>
                <p>
                    <input type="checkbox" id="bodyCareWaitingChoice1" name="bodyCareWaiting[]" value="Hydratant">
                    <label for="bodyCareWaitingChoice1">Hydratant</label>
                </p>
                <p>
                    <input type="checkbox" id="bodyCareWaitingChoice2" name="bodyCareWaiting[]" value="Matifiant">
                    <label for="bodyCareWaitingChoice2">Matifiant (qui empêche la peau de briller)</label>
                </p>
                <p>
                    <input type="checkbox" id="bodyCareWaitingChoice3" name="bodyCareWaiting[]" value="Anti-âge">
                    <label for="bodyCareWaitingChoice3">Anti-âge</label>
                </p>
                <p>
                    <input type="checkbox" id="bodyCareWaitingChoice4" name="bodyCareWaiting[]" value="Unifiant/Clarifiant">
                    <label for="bodyCareWaitingChoice4">Unifiant/Clarifiant (Correcteur de teint, atténue les tâches ou imperfections)</label>
                </p>
                <p>
                    <input type="checkbox" id="bodyCareWaitingChoice5" name="bodyCareWaiting[]" value="Un parfum agréable">
                    <label for="bodyCareWaitingChoice5">Un parfun agréable</label>
                </p>
                <p>
                    <input type="checkbox" id="bodyCareWaitingChoice6" name="bodyCareWaiting[]" value="Autre">
                    <label for="bodyCareWaitingChoice6">Autre:</label>
                </p>
                <p>
                    <input type="text" class="choiceComment resetChoiceCommentCssProperties" id="bodyCareWaitingComment1"
                           maxlength="50" name="otherBodyCareWaiting" placeholder="Entrez ici ce que vous attendez d'un soin visage/corps">
                    <label for="bodyCareWaitingComment1"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    23. Quelles informations sur l'emballage vous aident à faire votre choix ?: *
                </p>
                <p>
                    <input type="checkbox" id="packingInformationChoice1" name="packingInformation[]" value="La composition du produit">
                    <label for="packingInformationChoice1">La composition du produit</label>
                </p>
                <p>
                    <input type="checkbox" id="packingInformationChoice2" name="packingInformation[]" value="Type de peau/de cheveux">
                    <label for="packingInformationChoice2">Type de peau/de cheveux ? (peau sèche, cheveux cassant, peaux mâture...)</label>
                </p>
                <p>
                    <input type="checkbox" id="packingInformationChoice3" name="packingInformation[]" value="Une image/référence">
                    <label for="packingInformationChoice3">Une image/référence liée à votre appartenance éthnique</label>
                </p>
                <p>
                    <input type="checkbox" id="packingInformationChoice4" name="packingInformation[]" value="La marque">
                    <label for="packingInformationChoice4">La marque</label>
                </p>
                <p>
                    <input type="checkbox" id="packingInformationChoice5" name="packingInformation[]" value="Autre">
                    <label for="packingInformationChoice5">Autre:</label>
                </p>
                <p>
                    <input type="text" class="choiceComment resetChoiceCommentCssProperties" id="packingInformationComment1"
                           maxlength="50" name="otherPackingInformation" placeholder="Entrez ici les informations">
                    <label for="packingInformationComment1"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    24. Quel type d'emballage aimeriez-vous ?: *
                </p>
                <p>
                    <input type="checkbox" id="packagingTypeChoice1" name="packagingType[]" value="Plutôt neutre">
                    <label for="packagingTypeChoice1">Plutôt neutre (couleurs sobres, peu de motifs)</label>
                </p>
                <p>
                    <input type="checkbox" id="packagingTypeChoice2" name="packagingType[]" value="Coloré">
                    <label for="packagingTypeChoice2">Coloré</label>
                </p>
                <p>
                    <input type="checkbox" id="packagingTypeChoice3" name="packagingType[]" value="Très coloré & vitaminé">
                    <label for="packagingTypeChoice3">Très coloré & vitaminé</label>
                </p>
                <p>
                    <input type="checkbox" id="packagingTypeChoice4" name="packagingType[]" value="Brillant">
                    <label for="packagingTypeChoice4">Brillant</label>
                </p>
                <p>
                    <input type="checkbox" id="packagingTypeChoice5" name="packagingType[]" value="Aspect métal/chromé">
                    <label for="packagingTypeChoice5">Aspect métal/chromé</label>
                </p>
                <p>
                    <input type="checkbox" id="packagingTypeChoice6" name="packagingType[]" value="Autre">
                    <label for="packagingTypeChoice6">Autre:</label>
                </p>
                <p>
                    <input type="text" class="choiceComment resetChoiceCommentCssProperties" id="packagingTypeComment1"
                           maxlength="50" name="otherPackagingType" placeholder="Entrez ici le type d'emballage que vous aimeriez">
                    <label for="packagingTypeComment1"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <p class="surveyQuestion">
                    25. Seriez-vous intéressé(e) par l'achat de cosmétiques lors d'une réunion (type Tupperware, Partylite...) ?: *
                </p>
                <table>
                    <tr>
                        <th></th>
                        <th>Oui</th>
                        <th>Non</th>
                    </tr>
                    <tr>
                        <td>A votre domicile</td>
                        <td class="cellPosition">
                            <input type="radio" id="homeMeetingChoice1" class="insideRadioTable" name="homeMeeting" value="Oui">
                            <label for="homeMeetingChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="homeMeetingChoice2" class="insideRadioTable" name="homeMeeting" value="Non">
                            <label for="homeMeetingChoice2"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Chez un(e) ami(e)</td>
                        <td class="cellPosition">
                            <input type="radio" id="friendMeetingChoice1" class="insideRadioTable" name="friendMeeting" value="Oui">
                            <label for="friendMeetingChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="friendMeetingChoice2" class="insideRadioTable" name="friendMeeting" value="Non">
                            <label for="friendMeetingChoice2"></label>
                        </td>
                    </tr>
                </table>

                <div class="optionalQuestion">
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                    <p class="surveyQuestion">
                        26. Si non, pourquoi ?:
                    </p>
                    <p>
                        <textarea id="whyRefuseMeeting" maxlength="100" name="whyRefuseMeeting"
                                  placeholder="Décrivez ici pourquoi vous ne souhaitez pas faire de réunion à votre domicile ou chez un(e) ami(e)."></textarea>
                    </p>
                </div>

                <p>
                    <input type="submit" id='surveyPart2Submit' name="surveyPartTwoSubmit" value="Suite">
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
