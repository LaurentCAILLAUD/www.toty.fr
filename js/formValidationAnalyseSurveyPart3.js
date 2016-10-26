(function () {
    var formValidationAnalyseSurveyPart3 = {
        init: function () {
            $(document).ready(function () {

                /* variables declaration */
                var surveyQuestion = $(".surveyQuestion");
                var applyCosmeticsProductsChoice2 = $("#applyCosmeticsProductsChoice2");
                var whyNoApplyProducts = $("#whyNoApplyProducts");
                var childCosmeticsPurchaseSatisfactionChoice1 = $("#childCosmeticsPurchaseSatisfactionChoice1");
                var whyDissatisfactionChildCosmeticsUse = $("#whyDissatisfactionChildCosmeticsUse");

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

                /* question 27 add click management for the radio buttons */
                $('input[name="hasChild"]').change(function () {
                    surveyQuestionRemoveClass(0)
                });

                /* question 28 add click management for checkboxes */
                $('input[name="ageCategory[]"]').change(function () {
                    surveyQuestionRemoveClass(1)
                });

                /* question 29 add click management for the radio buttons */
                $('input[name="applyCosmeticsProducts"]').change(function () {
                    surveyQuestionRemoveClass(2)
                });

                /* question 30 add writing management for the textarea */
                whyNoApplyProducts.keydown(function () {
                    surveyQuestionRemoveClass(3);
                });

                /* question 31 add click management for the radio buttons */
                $('input[name="frequencyFaceCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(4)
                });

                $('input[name="frequencyHairCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(4)
                });

                $('input[name="frequencyBodyCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(4)
                });

                /* question 32 add click management for checkboxes */
                $('input[name="productLocation[]"]').change(function () {
                    surveyQuestionRemoveClass(5)
                });

                /* question 32 add writing management for the input text */
                $("#productLocationComment1").keydown(function () {
                    surveyQuestionRemoveClass(5);
                    checkThisElement($('#productLocationChoice7'));
                });

                $("#productLocationComment2").keydown(function () {
                    surveyQuestionRemoveClass(5);
                    checkThisElement($('#productLocationChoice8'));
                });

                $("#productLocationComment3").keydown(function () {
                    surveyQuestionRemoveClass(5);
                    checkThisElement($("#productLocationChoice10"));
                });

                /* question 33 add click management for checkboxes */
                $('input[name="favouriteUseMode[]"]').change(function () {
                    surveyQuestionRemoveClass(6)
                });

                /* Question 33 add writing management for the input text */
                $("#favouriteUseModeComment1").keydown(function () {
                    surveyQuestionRemoveClass(6);
                    checkThisElement($("#favouriteUseModeChoice10"));
                });

                /* question 34 add click management for the radio buttons */
                $('input[name="hairPriceAndFrequencyUse"]').change(function () {
                    surveyQuestionRemoveClass(7)
                });

                /* question 35 add click management for the radio buttons */
                $('input[name="skinPriceAndFrequencyUse"]').change(function () {
                    surveyQuestionRemoveClass(8)
                });

                /* question 36 add click management for the radio buttons */
                $('input[name="childCosmeticsPurchaseSatisfaction"]').change(function () {
                    surveyQuestionRemoveClass(9)
                });

                /* question 37 add click management for the radio buttons */
                whyDissatisfactionChildCosmeticsUse.keydown(function () {
                    surveyQuestionRemoveClass(10);
                });

                /* add click management for the button "suite" */
                $("#surveyPart3Submit").click(function () {

                    /* question 27 add click management for the radio buttons */
                    if (!$('input[name="hasChild"]').is(":checked")) {
                        alert('Veuillez cocher si vous avez ou non des enfants.');
                        $("#hasChildChoice1").focus();
                        surveyQuestion.eq(0).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 28 add click management for checkboxes */
                    if (!$("#hasChildChoice2").is(":checked")) {
                        var question28NumberOfCheckboxChecked = $('input[name="ageCategory[]"]:checked').length;
                        if (question28NumberOfCheckboxChecked == 0) {
                            alert('Veuillez cocher dans quelle tranche d\'âge se situe votre/vos enfants.');
                            $("#ageCategoryChoice1").focus();
                            surveyQuestion.eq(1).addClass("surveyQuestionFocus");
                            return false;
                        }

                        /* question 29 add click management for the radio buutons */
                        if (!$('input[name="applyCosmeticsProducts"]').is(":checked")) {
                            alert('Veuillez cocher si il vous arrive de lui/leur appliquer des produits cosmétiques.');
                            $("#applyCosmeticsProductsChoice1").focus();
                            surveyQuestion.eq(2).addClass("surveyQuestionFocus");
                            return false;
                        }

                        /* question 30 add click management for the textarea */
                        if (!$("#applyCosmeticsProductsChoice3").is(":checked")) {
                            if (applyCosmeticsProductsChoice2.is(":checked") && !whyNoApplyProducts.val()) {
                                alert('Veuillez saisir pourquoi vous ne lui/leur appliquez pas de produits cosmétiques.');
                                whyNoApplyProducts.focus();
                                surveyQuestion.eq(3).addClass("surveyQuestionFocus");
                                return false;
                            }

                            /* question 31 add click management for the radio buttons */
                            if (!applyCosmeticsProductsChoice2.is(":checkhed")) {
                                if (!$('input[name="frequencyFaceCosmeticUse"]').is(':checked')) {
                                    alert('Veuillez cocher à quelle fréquence vous lui/leur appliquez des produits pour le visage.');
                                    $("#frequencyFaceCosmeticUseChoice1").focus();
                                    surveyQuestion.eq(4).addClass("surveyQuestionFocus");
                                    return false;
                                } else if (!$('input[name="frequencyHairCosmeticUse"]').is(":checked")) {
                                    alert('Veuillez cocher à quelle fréquence vous lui/leur appliquez des produits pour les cheveux.');
                                    $("#frequencyHairCosmeticUseChoice1").focus();
                                    surveyQuestion.eq(4).addClass("surveyQuestionFocus");
                                    return false;
                                } else if (!$('input[name="frequencyBodyCosmeticUse"]').is(":checked")) {
                                    alert('Veuillez cocher à quelle fréquence vous lui/leur appliquer des produits pour le coprs.');
                                    $('#frequencyBodyCosmeticsUseChoice1').focus();
                                    surveyQuestion.eq(4).addClass("surveyQuestionFocus");
                                    return false;
                                }

                                /* question 32 add click management for checkboxes */
                                var question32NumberOfCheckboxChecked = $('input[name="productLocation[]"]:checked').length;
                                if (question32NumberOfCheckboxChecked == 0) {
                                    alert('Veuillez cocher à quel endroit vous trouvez ces produits.');
                                    $("#productLocationChoice1").focus();
                                    surveyQuestion.eq(5).addClass("surveyQuestionFocus");
                                    return false;
                                } else if ($("#productLocationChoice7").is(":checked") && !$("#productLocationComment1").val()) {
                                    alert('Veuillez saisir le site internet sur lequel vous achetez ces produits.');
                                    $("#productLocationComment1").focus();
                                    surveyQuestion.eq(5).addClass("surveyQuestionFocus");
                                    return false;
                                } else if ($("#productLocationChoice8").is(":checked") && !$("#productLocationComment2").val()) {
                                    alert('Veuillez saisir dasn quelle autre région/ville vous achetez ces produits.');
                                    $("#productLocationComment2").focus();
                                    surveyQuestion.eq(5).addClass("surveyQuestionFocus");
                                    return false;
                                } else if ($("#productLocationChoice10").is(":checked") && !$("#productLocationComment3").val()) {
                                    alert('veuillez saisir l\'autre endroit ou vous achetez ces produits.');
                                    $("#productLocationComment3").focus();
                                    surveyQuestion.eq(5).addClass("surveyQuestionFocus");
                                    return false;
                                }

                                /* question 33 add click management for checkboxes */
                                var question33NumberOfCheckboxChecked = $('input[name="favouriteUseMode[]"]:checked').length;
                                if (question33NumberOfCheckboxChecked == 0) {
                                    alert('Veuillez cocher quel mode d\'utilisation préférez-vous.');
                                    $("#favouriteUseModeChoice1").focus();
                                    surveyQuestion.eq(6).addClass("surveyQuestionFocus");
                                    return false;
                                } else if ($("#favouriteUseModeChoice10").is(":checked") && !$("#favouriteUseModeComment1").val()) {
                                    alert('Veuillez saisir l\'autre mode d\'utilisation que vous préférez.');
                                    $("#favouriteUseModeComment1").focus();
                                    surveyQuestion.eq(6).addClass("surveyQuestionFocus");
                                    return false;
                                }

                                /* question 34 add click management for the radio buttons */
                                if (!$('input[name="hairPriceAndFrequencyUse"]').is(":checked")) {
                                    alert('Veuillez cocher la fourchette de prix et la fréquence correspondante à vos achats en matière de cheveux.');
                                    $("#hairPriceAndFrequencyUseChoice1").focus();
                                    surveyQuestion.eq(7).addClass("surveyQuestionFocus");
                                    return false;
                                }

                                /* question 35 add click management for the radio buttons */
                                if (!$('input[name="skinPriceAndFrequencyUse"]').is(":checked")) {
                                    alert('Veuillez cocher la fourchette de prix et la fréquence correspondante à vos achats en matière de peau.');
                                    $("#skinPriceAndFrequencyUseChoice1").focus();
                                    surveyQuestion.eq(8).addClass("surveyQuestionFocus");
                                    return false;
                                }

                                /* question 36 add click management for the radio buttons */
                                if (!$('input[name="childCosmeticsPurchaseSatisfaction"]').is(":checked")) {
                                    alert('Veuillez cocher votre degré de satisfaction des produits cosmétiques pour enfants que vous utilisez.');
                                    childCosmeticsPurchaseSatisfactionChoice1.focus();
                                    surveyQuestion.eq(9).addClass("surveyQuestionFocus");
                                    return false;
                                }

                                /* question 37 add writing management for the textarea */
                                if (!childCosmeticsPurchaseSatisfactionChoice1.is(":checked")) {
                                    if (!whyDissatisfactionChildCosmeticsUse.val()) {
                                        alert('Veuillez saisir la raison pour laquelle vous êtes moyennement/pas satisfait des produits que vous utilisez pour votre/vos ' +
                                            'enfants');
                                        whyDissatisfactionChildCosmeticsUse.focus();
                                        surveyQuestion.eq(10).addClass("surveyQuestionFocus");
                                        return false;
                                    }
                                }
                            }
                        }
                    }
                })

            })
        }
    };
    formValidationAnalyseSurveyPart3.init()
})();
