(function () {
    var formValidationAnalyseContact = {
        init: function () {
            $(document).ready(function () {

                /* variables declaration */
                var userName = $("#userName");
                var userFirstName = $("#userFirstName");
                var userMail = $("#userMail");
                var userMessage = $("#userMessage");

                /* add writing management for the name input text */
                userName.keydown(function (event) {
                    var keyCode = event.which;
                    var userNameLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    return !!(userNameLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8 || keyCode == 189);
                });

                /* add writing management for the first name input text */
                userFirstName.keydown(function (event) {
                    var keyCode = event.which;
                    var userFirstNameLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    return !!(userFirstNameLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8 || keyCode == 189);
                });

                /* add writing management for the email input text */
                userMail.keydown(function (event) {
                    var keyCode = event.which;
                    var userMailLetteringAccepted = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                    return !!(userMailLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8 || keyCode == 189 || keyCode == 190
                    || keyCode == 192);
                });

                /* add writing management for the message textarea */
                userMessage.keydown(function (event) {
                    var keyCode = event.which;
                    var userMessageLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789- ";
                    return !!(userMessageLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8 || keyCode == 189 || keyCode == 190 || keyCode == 191);
                });

                /* add click management for the button "envoyez" */
                $("#mainFormSubmit").click(function () {

                    /* add writing management for the name input text */
                    if (!userName.val()) {
                        alert('Veuillez saisir votre nom de famille.');
                        userName.focus();
                        return false;
                    }

                    /* add writing management for the first name input text */
                    if (!userFirstName.val()) {
                        alert('Veuillez saisir votre prénom.');
                        userFirstName.focus();
                        return false;
                    }

                    /* add writing management for the mail input text */
                    if (!userMail.val()) {
                        alert('Veuillez saisir votre email.');
                        userMail.focus();
                        return false;
                    } else {
                        var mailWritten = userMail.val();
                        if (mailWritten.indexOf("@") == -1 || mailWritten.indexOf(".") == -1) {
                            alert('Le format de votre adresse mail n\'est pas conforme.');
                            userMail.focus();
                            return false;
                        }
                    }

                    /* add writing management message textarea */
                    if (!userMessage.val()) {
                        alert('Veuillez saisir votre message.');
                        userMessage.focus();
                        return false;
                    }
                })

            })
        }
    };
    formValidationAnalyseContact.init()
})();
