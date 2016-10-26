(function () {
    var formValidationAnalyseSurveyPart4 = {
        init: function () {
            $(document).ready(function () {

                /* variables declaration */
                var surveyQuestion = $(".surveyQuestion");
                var joinPhoneChoice1 = $("#joinPhoneChoice1");
                var phoneNumber = $("#phoneNumber");
                var mailAdress = $("#mailAdress");

                /* function "surveyQuestionRemoveClass" declaration */
                function surveyQuestionRemoveClass(id) {
                    if (surveyQuestion.eq(id).hasClass("surveyQuestionFocus")) {
                        surveyQuestion.eq(id).removeClass("surveyQuestionFocus")
                    }
                }

                /* function "checkOtherChoice" declaration */
                function checkThisElement(element) {
                    if (!element.is(":checked")) {
                        element.prop('checked', true);
                    }
                }

                /* question 38 add click management for checkboxes */
                $('input[name="socialMediaUse[]"]').change(function () {
                    surveyQuestionRemoveClass(0)
                });

                /* question 38 add writing management for the input text */
                $("#socialMediaUseComment1").keydown(function () {
                    surveyQuestionRemoveClass(0);
                    checkThisElement($("#socialMediaUseChoice10"));
                });

                /* question 39 add click management for radio buttons */
                $('input[name="joinPhone"]').change(function () {
                    surveyQuestionRemoveClass(1)
                });

                $('input[name="joinMail"]').change(function () {
                    surveyQuestionRemoveClass(1)
                });

                /* question 40 add writing management for input text */
                phoneNumber.keydown(function () {
                    surveyQuestionRemoveClass(2);
                });

                mailAdress.keydown(function () {
                    surveyQuestionRemoveClass(2);
                });

                /* add click management for the button "suite" */
                $("#surveyPart4Submit").click(function () {

                    /* question 38 add click management for checkboxes */
                    if (!$('input[name="socialMediaUse[]"]').is(":checked")) {
                        alert('Veuillez cocher le/les média(s) que vous utilisez.');
                        $("#socialMediaUseChoice1").focus();
                        surveyQuestion.eq(0).addClass("surveyQuestionFocus");
                        return false;
                    } else if ($("#socialMediaUseChoice10").is(":checked") && !$("#socialMediaUseComment1").val()) {
                        alert('Veuillez saisir le où les autres médias sociaux que vous utilisez.');
                        $("#socialMediaUseComment1").focus();
                        surveyQuestion.eq(0).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 39 add click management for the radio buttons */
                    if (!$('input[name="joinPhone"]').is(":checked")) {
                        alert('Veuillez cocher si oui où non vous accepteriez d\'être contacté(e) par téléphone.');
                        joinPhoneChoice1.focus();
                        surveyQuestion.eq(1).addClass("surveyQuestionFocus");
                        return false;
                    } else if (!$('input[name="joinMail"]').is(":checked")) {
                        alert('veuillez cocher si oui où non vous accepteriez d\'être contacté(e) par mail.');
                        $("#joinMailChoice1").focus();
                        surveyQuestion.eq(1).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 40 add writing management for the input text */
                    if (!$("#joinPhoneChoice2").is(":checked") || !$("#joinMailChoice2").is((":checked"))) {
                        if (joinPhoneChoice1.is(":checked") && !phoneNumber.val()) {
                            alert('Veuillez saisir votre numéro de téléphone.');
                            phoneNumber.focus();
                            surveyQuestion.eq(2).addClass("surveyQuestionFocus");
                            return false;
                        } else if ($("#joinMailChoice1").is(":checked") && !mailAdress.val()) {
                            alert('Veuillez saisir votre adresse mail.');
                            mailAdress.focus();
                            surveyQuestion.eq(2).addClass("surveyQuestionFocus");
                            return false;
                        } else if (joinPhoneChoice1.is(":checked")) {
                            if (phoneNumber.val().length != 10) {
                                alert('Le format de votre numéro de téléphone n\'est pas valide');
                                phoneNumber.focus();
                                surveyQuestion.eq(2).addClass('surveyQuestionFocus');
                                return false;
                            }
                        } else if ($("#joinMailChoice1").is(":checked")) {
                            var mailWritten = mailAdress.val();
                            if (mailWritten.indexOf("@") == -1 || mailWritten.indexOf(".") == -1) {
                                alert('Le format de votre adresse mail n\'est pas conforme.');
                                mailAdress.focus();
                                surveyQuestion.eq(2).addClass("surveyQuestionFocus");
                                return false;
                            }
                        }
                    }

                });

            })
        }
    };
    formValidationAnalyseSurveyPart4.init()
})();
