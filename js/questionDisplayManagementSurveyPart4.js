(function () {
    var questionDisplayManagementSurveyPart4 = {
        init: function () {
            $(document).ready(function () {

                var noChoice = $("#socialMediaUseChoice9");

                /* question 38 add change management status for all checkbox except choice "no" */
                $('input[name="socialMediaUse[]"]').not(":eq(8)").change(function () {
                    if (noChoice.is(":checked")) {
                        $(noChoice).prop("checked", false)
                    }
                });

                /* question 38 add change management status for the checkbox with choice "no" */
                $(noChoice).change(function () {
                    $('input[name="socialMediaUse[]"]').not(":eq(8)").prop("checked", false)
                });

                /* question 39 add change management status for the radio button with choice "yes" */
                $("#joinPhoneChoice1").change(function () {
                    if ($("#joinMailChoice2").is(":checked")) {
                        $(".optionalQuestion").removeClass("uselessQuestion");
                        $(".optionalQuestion:last-of-type").addClass("uselessQuestion")
                    } else if ($("#joinMailChoice1").is(":checked")) {
                        $(".optionalQuestion").removeClass("uselessQuestion")
                    }
                });

                /* question 39 add change management status for the radio button with choice "yes" */
                $("#joinMailChoice1").change(function () {
                    if ($("#joinPhoneChoice2").is(":checked")) {
                        $(".optionalQuestion").removeClass("uselessQuestion");
                        $(".optionalQuestion:nth-of-type(2)").addClass("uselessQuestion")
                    } else if ($("#joinPhoneChoice1").is(":checked")) {
                        $(".optionalQuestion").removeClass("uselessQuestion")
                    }
                });

                /* question 39 add change management status for the radio button with choice "no" */
                $("#joinPhoneChoice2").change(function () {
                    if ($("#joinMailChoice2").is(":checked")) {
                        $(".optionalQuestion").addClass("uselessQuestion");
                    } else if ($("#joinMailChoice1").is(":checked")) {
                        $(".optionalQuestion:nth-of-type(2)").addClass("uselessQuestion")
                    }
                });

                /* question 39 add change management status for the radio button with choice "no" */
                $("#joinMailChoice2").change(function () {
                    if ($("#joinPhoneChoice2").is(":checked")) {
                        $(".optionalQuestion").addClass("uselessQuestion")
                    } else if ($("#joinPhoneChoice1").is(":checked")) {
                        $(".optionalQuestion:nth-of-type(3)").addClass("uselessQuestion")
                    }
                });

            })
        }
    };
    questionDisplayManagementSurveyPart4.init()
})();
