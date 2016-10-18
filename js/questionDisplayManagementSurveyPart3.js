(function () {
    var questionDisplayManagementSurveyPart3 = {
        init: function () {
            $(document).ready(function () {

                var deviceWith = $(document).width();

                /* question 27 add change management status of the radio button with choice "yes" */
                $("#hasChildChoice1").change(function () {
                    $(".optionalQuestion").removeClass("uselessQuestion");
                    if (deviceWith <= 1024) {
                        $("#mainContainer").css("margin", "30px 0");
                    } else {
                        $("#mainContainer").css("margin", "30px 10px");
                    }
                });

                /* question 27 add management status of the radio button with choice "no" */
                $("#hasChildChoice2").change(function () {
                    $(".optionalQuestion").addClass("uselessQuestion");
                    if (deviceWith <= 599) {
                        $("#mainContainer").css("margin", "8.27651vh 0");
                    } else if (deviceWith >= 600 && deviceWith <= 799) {
                        $("#mainContainer").css("margin", "13.85255vh 0");
                    } else if (deviceWith >= 800 && deviceWith <= 1024) {
                        $("#mainContainer").css("margin", "17.0657vh 0");
                    } else {
                        $("#mainContainer").css("margin", "21.01818vh 10px");
                    }
                });

                /* question 29 add change management status by the radio button with choice "yes" */
                $("#applyCosmeticsProductsChoice1").change(function () {
                    $(".optionalQuestion").removeClass("uselessQuestion");
                    $(".optionalQuestion:nth-of-type(3)").addClass("uselessQuestion");
                    if (deviceWith >= 1025) {
                        $("#mainContainer").css("margin", "30px 10px")
                    }
                });

                /* question 29 add change management status by the radio button with choice "no" */
                $("#applyCosmeticsProductsChoice2").change(function () {
                    $(".optionalQuestion").removeClass("uselessQuestion");
                    $(".optionalQuestion:gt(2)").addClass("uselessQuestion");
                    if (deviceWith >= 1025) {
                        $("#mainContainer").css("margin", "30px 10px")
                    }
                });

                /* question 29 add change management status by the radio button with choice "I don't know" */
                $("#applyCosmeticsProductsChoice3").change(function () {
                    $(".optionalQuestion:gt(1)").addClass("uselessQuestion");
                    if (deviceWith >= 1025) {
                        $("#mainContainer").css("margin", "2.72727vh 10px")
                    }
                });

                /* question 36 add change management status by the radio button with choice "yes" */
                $("#childCosmeticsPurchaseSatisfactionChoice1").change(function () {
                    $(".optionalQuestion:last-of-type").addClass("uselessQuestion");
                });

                /* question 36 add change management status by the radio button with choice "moderately" */
                $("#childCosmeticsPurchaseSatisfactionChoice2").change(function () {
                    $(".optionalQuestion:last-of-type").removeClass("uselessQuestion");
                });

                /* question 36 add change management status by the radio button with choice "no" */
                $("#childCosmeticsPurchaseSatisfactionChoice3").change(function () {
                    $(".optionalQuestion:last-of-type").removeClass("uselessQuestion");
                })

            })
        }
    };
    questionDisplayManagementSurveyPart3.init()
})();
