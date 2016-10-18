(function () {
    var formValidationAnalyseSurveyPart2 = {
        init: function () {
            $(document).ready(function () {

                /* variable declaration */
                var surveyQuestion = $(".surveyQuestion");
                var hairCareWaitingChoice9 = $("#hairCareWaitingChoice9");
                var bodyCareWaitingChoice6 = $("#bodyCareWaitingChoice6");
                var packingInformationChoice5 = $("#packingInformationChoice5");
                var packagingTypeChoice6 = $("#packagingTypeChoice6");
                var homeMeetingChoice1 = $("#homeMeetingChoice1");
                var friendMeetingChoice1 = $("#friendMeetingChoice1");
                var whyRefuseMeeting = $("#whyRefuseMeeting");

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

                /* question 21 add click management for checkboxes */
                $('input[name="hairCareWaiting[]"]').change(function () {
                    surveyQuestionRemoveClass(0)
                });

                /* question 21 add writing management for the input text */
                $("#hairCareWaitingComment1").keydown(function () {
                    surveyQuestionRemoveClass(0);
                    checkThisElement(hairCareWaitingChoice9);
                    var keyCode = event.which;
                    var otherHairCareLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherHairCareLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 22 add click management for checkboxes */
                $('input[name="bodyCareWaiting[]"]').change(function () {
                    surveyQuestionRemoveClass(1)
                });

                /* question 22 add writing management for the input text */
                $("#bodyCareWaitingComment1").keydown(function () {
                    surveyQuestionRemoveClass(1);
                    checkThisElement(bodyCareWaitingChoice6);
                    var keyCode = event.which;
                    var otherBodyCareLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherBodyCareLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 23 add click management for checkboxes */
                $('input[name="packingInformation[]"]').change(function () {
                    surveyQuestionRemoveClass(2)
                });

                /* question 23 add writing management for the input text */
                $("#packingInformationComment1").keydown(function () {
                    surveyQuestionRemoveClass(2);
                    checkThisElement(packingInformationChoice5);
                    var keyCode = event.which;
                    var otherPackingLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherPackingLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 24 add click management for checkboxes */
                $('input[name="packagingType[]"]').change(function () {
                    surveyQuestionRemoveClass(3);
                });


                /* question 24 add writing management for the input text */
                $("#packagingTypeComment1").keydown(function () {
                    surveyQuestionRemoveClass(3);
                    checkThisElement(packagingTypeChoice6);
                    var keyCode = event.which;
                    var otherPackagingLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherPackagingLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 25 add click management for radio buttons */
                $('input[name="homeMeeting"]').change(function () {
                    surveyQuestionRemoveClass(4)
                });

                $('input[name="friendMeeting"]').change(function () {
                    surveyQuestionRemoveClass(4)
                });

                /* question 26 add writing management for textarea */
                whyRefuseMeeting.keydown(function () {
                    surveyQuestionRemoveClass(5);
                    var keyCode = event.which;
                    var otherRefuseLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherRefuseLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* add click management for the button "suite" */
                $("#surveyPart2Submit").click(function () {

                    /* question 21 add click management for checkboxes */
                    var question21NumberOfCheckboxChecked = $('input[name="hairCareWaiting[]"]:checked').length;
                    if (question21NumberOfCheckboxChecked == 0) {
                        alert('Veuillez cocher ce que vous attendez d\'un soin capillaire.');
                        $("#hairCareWaitingChoice1").focus();
                        surveyQuestion.eq(0).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (hairCareWaitingChoice9.is(":checked") && !$("#hairCareWaitingComment1").val()) {
                        alert('Veuillez saisir l\'autre attente que vous avez pour un soin capillaire.');
                        hairCareWaitingChoice9.focus();
                        surveyQuestion.eq(0).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 22 add click management for checkboxes */
                    var question22NumberOfCheckboxChecked = $('input[name="bodyCareWaiting[]"]:checked').length;
                    if (question22NumberOfCheckboxChecked == 0) {
                        alert('Veuillez cocher ce que vous attendez d\'un soin du corps/visage.');
                        $("#hairCareWaitingChoice1").focus();
                        surveyQuestion.eq(1).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (bodyCareWaitingChoice6.is(":checked") && !$("#bodyCareWaitingComment1").val()) {
                        alert('Veuillez saisir l\'autre attente que vous avez pour un soin du corps/visage.');
                        bodyCareWaitingChoice6.focus();
                        surveyQuestion.eq(1).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 23 add click management for checkboxes */
                    var question23NumberOfCheckboxChecked = $('input[name="packingInformation[]"]:checked').length;
                    if (question23NumberOfCheckboxChecked == 0) {
                        alert('Veuillez cocher quelles informations sur l\'emballage vous aident à faire votre choix.');
                        $("#packingInformationChoice1").focus();
                        surveyQuestion.eq(2).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (packingInformationChoice5.is(":checked") && !$("#packingInformationComment1").val()) {
                        alert('Veuillez saisir l\'autre information sur l\'emballage qui vous aide à faire votre choix.');
                        packingInformationChoice5.focus();
                        surveyQuestion.eq(2).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 24 add click management for checkboxes */
                    var question24NumberOfCheckboxChecked = $('input[name="packagingType[]"]:checked').length;
                    if (question24NumberOfCheckboxChecked == 0) {
                        alert('Veuillez cocher le type d\'emballage que vous aimeriez.');
                        $("#packingInformationChoice1").focus();
                        surveyQuestion.eq(3).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (packagingTypeChoice6.is(":checked") && !$("#packagingTypeComment1").val()) {
                        alert('Veuillez saisir l\'autre emballage que vous aimeriez.');
                        packagingTypeChoice6.focus();
                        surveyQuestion.eq(3).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 25 add click management for the radio buttons */
                    if (!$('input[name="homeMeeting"]').is(":checked")) {
                        alert('Veuillez cocher si oui où non vous seriez intéressé(e) par une réunion à votre dominicle.');
                        homeMeetingChoice1.focus();
                        surveyQuestion.eq(4).addClass("surveyQuestionFocus");
                        return false;
                    } else if (!$('input[name="friendMeeting"]').is(":checked")) {
                        alert('Veuillez cocher si oui où non vous seriez intéressé(e) par une réunion chez un(e) ami(e).');
                        friendMeetingChoice1.focus();
                        surveyQuestion.eq(4).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question  26 add writing management for the textareao */
                    if (!homeMeetingChoice1.is(":checked") || !friendMeetingChoice1.is(":checked")) {
                        if (!whyRefuseMeeting.val()) {
                            alert('Veuillez saisir la raison pour laquelle vous n\'êtes pas intérressé(e) par une réunion.');
                            whyRefuseMeeting.focus();
                            surveyQuestion.eq(5).addClass("surveyQuestionFocus");
                            return false;
                        }
                    }
                })

            })
        }
    };
    formValidationAnalyseSurveyPart2.init()
})();
