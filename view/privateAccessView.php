<?php
require ('../controller/privateAccessViewController.php');
if (isset($_SESSION['login'])) {
    header('location:respondentsAnswersView.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TOTY - La beauté personnalisée - Accés privé</title>

    <!-- stylesheet file -->
    <link href="../css/privateAccessViewSmartphoneStylesheet.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../css/privateAccessViewTabletStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)">
    <link href="../css/privateAccessViewTabletLargeFormatStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 800px)">
    <link href="../css/privateAccessViewComputerStylesheet.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">

    <!-- javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/animationMenu.js" type="application/javascript"></script>
    <script src="../js/formValidationAnalysePrivateAccess.js" type="text/javascript"></script>
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
            <h1>Connecte-toi</h1>
            <form id="mainForm" action="" method="post">
                <p>
                    <input type="email" id="ownerMail" maxlength="35" name="ownerMail" placeholder="Entre ici ton email.">
                    <label for="ownerMail"></label>
                </p>
                <p>
                    <input type="password" id="ownerPassword" maxlength="15" name="ownerPassword" placeholder="Entre ici ton mot de passe.">
                    <label for="ownerPassword"></label>
                </p>
                <p>
                    <input type="submit" id="mainFormSubmit" name="mainFormSubmit" value="Connexion">
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
                    <a href="#">Accés privé</a>
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