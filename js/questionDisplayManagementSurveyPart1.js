(function () {
    var questionDisplayManagementSurveyPart1 = {
        init: function () {
            $(document).ready(function () {

                var noHairChoice = $("#changeHairAppearanceChoice12");

                /* question 13 add change management status of the radio button with choice "yes" */
                $("#skinProductsDifficultiesChoice1").change(function () {
                    if ($("#hairProductsDifficultiesChoice2").is(":checked")) {
                        $(".optionalQuestion:nth-of-type(1)").removeClass("uselessQuestion");
                    }
                });

                /* question 13 add change management status of the radio button with choice "yes" */
                $("#hairProductsDifficultiesChoice1").change(function () {
                    if ($("#skinProductsDifficultiesChoice2").is(":checked")) {
                        $(".optionalQuestion:nth-of-type(1)").removeClass("uselessQuestion");
                    }
                });

                /* question 13 add change management status of the radio button with choice "no" */
                $("#skinProductsDifficultiesChoice2").change(function () {
                    if ($("#hairProductsDifficultiesChoice2").is(":checked")) {
                        $(".optionalQuestion:nth-of-type(1)").addClass("uselessQuestion");
                    }
                });

                /* question 13 add change management status of the radio button with choice "no" */
                $("#hairProductsDifficultiesChoice2").change(function () {
                    if ($("#skinProductsDifficultiesChoice2").is(":checked")) {
                        $(".optionalQuestion:nth-of-type(1)").addClass("uselessQuestion");
                    }
                });

                /* question 15 add change management status for all the checkbox except checkbox with choice "no hair" */
                $('input[name="changeHairAppearance[]"]').not(":eq(11)").change(function () {
                    if (noHairChoice.is(":checked")) {
                        $(noHairChoice).prop("checked", false);
                        $(".optionalQuestion:nth-of-type(2)").removeClass("uselessQuestion");
                    }
                });

                /* question 15 add change management status of the choice "no hair" */
                $(noHairChoice).change(function () {
                    if ($(this).is(':checked')) {
                        $('input[name="changeHairAppearance[]"]').not(':eq(11)').prop('checked', false);
                        $(".optionalQuestion:nth-of-type(2)").addClass("uselessQuestion");
                    } else {
                        $(".optionalQuestion:nth-of-type(2)").removeClass("uselessQuestion");
                    }
                });

                /* question 15 add change management status of the button radio with the choice "yes" */
                $("#cosmeticsPurchaseSatisfactionChoice1").change(function () {
                    $(".optionalQuestion:nth-of-type(3)").addClass('uselessQuestion');
                });

                /* question 15 add change management status of the button radio with choices "no" or "moderately" */
                $('input[name="cosmeticsPurchaseSatisfaction"]').not(':eq(0)').change(function () {
                    $(".optionalQuestion:nth-of-type(3)").removeClass('uselessQuestion');
                });

            })
        }
    };
    questionDisplayManagementSurveyPart1.init()
})();
