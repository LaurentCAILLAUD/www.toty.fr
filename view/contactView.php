<?php
require ('../controller/contactViewController.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TOTY - La beauté personnalisée - Contact</title>

    <!-- stylesheet files -->
    <link href="../css/contactViewSmartphoneStylesheet.css" type="text/css" rel="stylesheet" media="screen">
    <link href="../css/contactViewTabletStylesheet.css" type="text/css" rel="stylesheet" media="screen and (min-width:600px)">
    <link href="../css/contactViewTabletLargeFormatStylesheet.css" type="text/css" rel="stylesheet" media="screen and (min-width:800px)">
    <link href="../css/contactViewComputerStylesheet.css" type="text/css" rel="stylesheet" media="screen and (min-width:1025px)">

    <!-- javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/animationMenu.js" type="application/javascript"></script>
    <script src="../js/formValidationAnalyseContact.js" type="text/javascript"></script>
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
                <li><a href="#">CONTACT</a></li>
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

            <!-- Beginning of the block "contactInformationLink" -->
            <section id="contactInformationLink">
                <h1>Contactez-moi</h1>
                <figure>
                    <img src="../pictures/pictogramme-mail-img.png">
                </figure>
                <p>
                    <a href="mailto:contact@toty.fr">contact@toty.fr</a>
                </p>
                <figure>
                    <img src="../pictures/pictogramme-telephone-img.png">
                </figure>
                <p>
                    06.18.35.43.78
                </p>
            </section>
            <!-- End of the block "contactInformationLink" -->

            <!-- Beginning of the block "contactForm" -->
            <section id="contactForm">
                <h1>Envoyez moi un message</h1>
                <form id="mainForm" action="" method="post">
                    <p>
                        <input type="text" id="userName" maxlength="30" name="userName" placeholder="Entrez ici votre nom.">
                        <label for="userName"></label>
                    </p>
                    <p>
                        <input type="text" id="userFirstName" maxlength="30" name="userFirstName" placeholder="Entrez ici votre prénom">
                        <label for="userFirstName"></label>
                    </p>
                    <p>
                        <input type="email" id="userMail" maxlength="50" name="userMail" placeholder="Entrez ici votre email">
                        <label for="userMail"></label>
                    </p>
                    <p>
                        <textarea id="userMessage" maxlength="250" name="userMessage" placeholder="Entrez ici votre message"></textarea>
                    </p>
                    <p>
                        <input type="submit" id="mainFormSubmit" name="mainFormSubmit" value="Envoyez">
                    </p>
                </form>
            </section>
            <!-- End of the block "contactForm" -->

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
                    <a href="#">Contact</a>
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