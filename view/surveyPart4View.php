<?php
session_start();
if (isset($_SESSION['part4'])) {
    header('location:surveyAlreadySendView.html');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TOTY - La beauté personnalisée - Médias sociaux et Entretien</title>

    <!-- stylesheet files -->
    <link href="../css/surveyPart4ViewSmartphoneStylesheet.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../css/surveyPart4ViewTabletStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)">
    <link href="../css/surveyPart4ViewTabletLargeFormatStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 800px)">
    <link href="../css/surveyPart4ViewComputerStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">

    <!-- javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/animationMenu.js" type="application/javascript"></script>
    <script src="../js/questionDisplayManagementSurveyPart4.js" type="text/javascript"></script>
    <script src="../js/formValidationAnalyseSurveyPart4.js" type="text/javascript"></script>
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

            <h1>Médias sociaux</h1>

            <p class="userIndication">* Réponse obligatoire</p>

            <form id="mainForm" action="../controller/surveyPart4ViewController.php" method="post">
                <p class="surveyQuestion">
                    38. Utilisez-vous ces médias sociaux ?: *
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice1" name="socialMediaUse[]" value="Facebook">
                    <label for="socialMediaUseChoice1">Facebook</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice2" name="socialMediaUse[]" value="Twitter">
                    <label for="socialMediaUseChoice2">Twitter</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice3" name="socialMediaUse[]" value="Instagram">
                    <label for="socialMediaUseChoice3">Instagram</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice4" name="socialMediaUse[]" value="Google+">
                    <label for="socialMediaUseChoice4">Google+</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice5" name="socialMediaUse[]" value="LinkedIn">
                    <label for="socialMediaUseChoice5">LinkedIn</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice6" name="socialMediaUse[]" value="Pinterest">
                    <label for="socialMediaUseChoice6">Pinterest</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice7" name="socialMediaUse[]" value="Snapchat">
                    <label for="socialMediaUseChoice7">Snapchat</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice8" name="socialMediaUse[]" value="Youtube">
                    <label for="socialMediaUseChoice8">Youtube</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice9" name="socialMediaUse[]" value="Aucun">
                    <label for="socialMediaUseChoice9">Aucun</label>
                </p>
                <p>
                    <input type="checkbox" id="socialMediaUseChoice10" name="socialMediaUse[]" value="Autre">
                    <label for="socialMediaUseChoice10">Autre:</label>
                </p>
                <p>
                    <input type="text" class="choiceComment resetChoiceCommentCssProperties" id="socialMediaUseComment1"
                           maxlength="50" name="otherSocialMediaUse" placeholder="Entrez ici le réseau social que vous utilisez.">
                    <label for="socialMediaUseComment1"></label>
                </p>
                <figure>
                    <img src="../pictures/round-color-img.png">
                </figure>

                <h1>Entretien</h1>

                <p class="userIndication">* Réponse obligatoire</p>

                <p class="surveyQuestion">
                    39. Accepteriez-vous d'être contacté(e) pour développer vos réponses ?: *
                </p>
                <table>
                    <tr>
                        <th></th>
                        <th>Oui</th>
                        <th>Non</th>
                    </tr>
                    <tr>
                        <td>Par téléphone</td>
                        <td class="cellPosition">
                            <input type="radio" id="joinPhoneChoice1" class="insideRadioTable" name="joinPhone" value="Oui">
                            <label for="joinPhoneChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="joinPhoneChoice2" class="insideRadioTable" name="joinPhone" value="Non">
                            <label for="joinPhoneChoice2"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Par mail</td>
                        <td class="cellPosition">
                            <input type="radio" id="joinMailChoice1" class="insideRadioTable" name="joinMail" value="Oui">
                            <label for="joinMailChoice1"></label>
                        </td>
                        <td class="cellPosition">
                            <input type="radio" id="joinMailChoice2" class="insideRadioTable" name="joinMail" value="Non">
                            <label for="joinMailChoice2"></label>
                        </td>
                    </tr>
                </table>

                <div class="optionalQuestion">
                    <figure>
                        <img src="../pictures/round-color-img.png">
                    </figure>
                    <p class="surveyQuestion">
                        40. Si oui, veuillez renseigner votre numéro de téléphone et/ou votre mail ?:
                    </p>
                </div>

                <div class="optionalQuestion">
                    <p>
                        <input type="tel" id="phoneNumber" maxlength="10" name="phoneNumber" placeholder="Entrez ici votre numéro de téléphone">
                        <label for="phoneNumber"></label>
                    </p>
                </div>

                <div class="optionalQuestion">
                    <p>
                        <input type="email" id="mailAdress" maxlength="50" name="mailAdress" placeholder="Entrez ici votre adresse mail">
                        <label for="mailAdress"></label>
                    </p>
                </div>

                <p>
                    <input type="submit" id='surveyPart4Submit' name="surveyPartFourSubmit" value="Valider">
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