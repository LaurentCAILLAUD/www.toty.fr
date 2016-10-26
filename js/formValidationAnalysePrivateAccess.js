(function () {
    var formValidationAnalysePrivateAccess = {
        init: function () {
            $(document).ready(function () {

                /* variables declaration */
                var ownerMail = $("#ownerMail");
                var ownerPassword = $("#ownerPassword");

                /* add click management for the email input text */
                ownerMail.keydown(function (event) {
                    var keyCode = event.which;
                    var mailLetteringAccepted = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                    return !!(mailLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8 || keyCode == 189 || keyCode == 190 || keyCode == 192);
                });

                /* add click management for the password input text */
                ownerPassword.keydown(function (event) {
                    var keyCode = event.which;
                    var passwordLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    return !!(passwordLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* add click management for the button "connexion" */
                $("#mainFormSubmit").click(function () {

                    /* add click management for the email input text */
                    if (!ownerMail.val()) {
                        alert('Veuillez saisir votre email.');
                        ownerMail.focus();
                        return false;
                    } else {
                        var mailWritten = ownerMail.val();
                        if (mailWritten.indexOf("@") == -1 || mailWritten.indexOf('.') == -1) {
                            alert('Le format de votre adresse mail n\'est pas conforme.');
                            ownerMail.focus();
                            return false;
                        }
                    }

                    /* add click management for the password input text */
                    if (!ownerPassword.val()) {
                        alert('Veuillez saisir votre mot de passe.');
                        ownerPassword.focus();
                        return false;
                    }
                })

            })
        }
    };
    formValidationAnalysePrivateAccess.init()
})();
