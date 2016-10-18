(function () {
    var questionDisplayManagementSurveyPart2 = {
        init: function () {
            $(document).ready(function () {

                /* add change management status of the radio button with choice "yes" */
                $("#homeMeetingChoice1").change(function () {
                    if ($("#friendMeetingChoice1").is(":checked")) {
                        $(".optionalQuestion").addClass("uselessQuestion");
                    }
                });

                /* add change management status of the radio button with choice "yes" */
                $("#friendMeetingChoice1").change(function () {
                    if ($("#homeMeetingChoice1").is(":checked")) {
                        $(".optionalQuestion").addClass("uselessQuestion");
                    }
                });

                /* add change management status of the radio button with choice "no" */
                $("#homeMeetingChoice2").change(function () {
                    $(".optionalQuestion").removeClass("uselessQuestion")
                });

                /* add change management status of the radio button with choice "no" */
                $("#friendMeetingChoice2").change(function () {
                    $(".optionalQuestion").removeClass("uselessQuestion")
                })

            })
        }
    };
    questionDisplayManagementSurveyPart2.init()
})();
