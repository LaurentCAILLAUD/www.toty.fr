(function () {
    var formValidationAnalyseContact = {
        init: function () {
            $(document).ready(function () {

                /* variables declaration */
                var userName = $("#userName");
                var userFirstName = $("#userFirstName");
                var userMail = $("#userMail");
                var userMessage = $("#userMessage");

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
