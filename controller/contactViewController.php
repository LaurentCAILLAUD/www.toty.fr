<?php
try {
    if (isset($_POST['mainFormSubmit'])) {
        $to = 'contact@toty.fr';
        $subject = 'Une/un utilisatrice/utilisateur de ton site t\'écrit.';
        $message = '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width">
        </head>
        <body style="background-color: rgba(92, 151, 191, 1); font-family: \'San Francisco Display\',sans-serif; font-size: 18px;margin: 0; padding: 0">
        
            <div id="mainWrapper" style="margin: 10px">

                 <header id="mainheader">
                    <figure style="width: 50%; max-width: 400px; margin: 0 auto">
                        <img src="http://www.toty.fr/pictures/logo-toty-img.png" style="width: 100%">
                    </figure>
                </header>

                <div id="mainContainer">
                    <p style="text-align: center">
                        Jeannette,
                    </p>
                    <p style="text-align: justify">
                        ' . $_POST['userFirstName'] . ' ' . $_POST['userName'] . ' vient de t\'envoyer un message depuis ton site. Le voici:<br><br>
                        ' . $_POST['userMessage'] . '<br><br>
                        Pour répondre à cette personne tu peux utiliser le mail suivant:
                    </p>
                    <p style="text-align:center">
                        <a href="mailto:' . $_POST['userMail'] . '" style="text-decoration: none; color: black">' . $_POST['userMail'] . '</a>
                    </p>
                </div>

            </div>
        </body>
    </html>
        ';
        $headers = 'From: contact@toty.fr' . "\n";
        $headers .= 'Reply-To: contact@toty.fr' . "\n";
        $headers .= 'Content-Type: text/html; charset="UTF-8"' . "\n";
        $headers .= 'Content-Transfer-Encoding: 8bit';
        if (mail($to, $subject, $message, $headers)) {
            throw new Exception('Mail envoyé !');
        } else {
            throw new Exception('Echec envoi du mail');
        }
    }
} catch (Exception $e) {
    echo '<script type="text/javascript">alert("' . $e->getMessage() . '")</script>';
}