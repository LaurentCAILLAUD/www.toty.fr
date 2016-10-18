(function () {
    var formValidationAnalyseSurveyPart1 = {
        init: function () {
            $(document).ready(function () {

                /* variable declaration */
                var surveyQuestion = $(".surveyQuestion");
                var maleGender = $("#maleGender");
                var town = $("#town");
                var postalCode = $("#postalCode");
                var birthYear = $("#birthYear");
                var purchaseLocationChoice7 = $("#purchaseLocationChoice7");
                var purchaseLocationChoice8 = $("#purchaseLocationChoice8");
                var purchaseLocationChoice11 = $("#purchaseLocationChoice11");
                var preferredUseModeChoice10 = $("#preferredUseModeChoice10");
                var whyNeedAdvice = $("#whyNeedAdvice");
                var whyProductsDifficultiesChoice3 = $("#whyProductsDifficultiesChoice3");
                var changeHairAppearanceChoice13 = $("#changeHairAppearanceChoice13");
                var placeChangeHairAppearanceChoice10 = $("#placeChangeHairAppearanceChoice10");
                var cosmeticsPurchaseSatisfactionChoice1 = $("#cosmeticsPurchaseSatisfactionChoice1");
                var whyDissatisfactionCosmeticsUse = $("#whyDissatisfactionCosmeticsUse");

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

                /* question 1 add click management for the radio buttons */
                $('input[name="gender"]').change(function () {
                    surveyQuestionRemoveClass(0)
                });

                /* question 2 add write management for the input text */
                town.keydown(function () {
                    surveyQuestionRemoveClass(1);
                    var keyCode = event.which;
                    var letteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- ";
                    return !!(letteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                postalCode.keydown(function () {
                    surveyQuestionRemoveClass(1);
                    var keyCode = event.which;
                    var postalCodeNumbersAccepted = "0123456789";
                    return !!(postalCodeNumbersAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 3 add click management for the radio buttons */
                $('input[name="age"]').change(function () {
                    surveyQuestionRemoveClass(2)
                });

                /* question 4 add writing management for the input text */
                birthYear.keydown(function () {
                    surveyQuestionRemoveClass(3);
                    var keyCode = event.which;
                    var postalCodeNumbersAccepted = "0123456789";
                    return !!(postalCodeNumbersAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 5 add click management for the radio buttons */
                $('input[name="skinTone"]').change(function () {
                    surveyQuestionRemoveClass(4)
                });

                /* question 6 add click management for the checkboxes */
                $('input[name="skinFeature[]"]').change(function () {
                    surveyQuestionRemoveClass(5)
                });

                /* question 7 add  click management for the radio buttons */
                $('input[name="hairType"]').change(function () {
                    surveyQuestionRemoveClass(6)
                });

                /* question 8 add click management for the radio buttons */
                $('input[name="faceCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(7)
                });

                $('input[name="bodyCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(7)
                });

                $('input[name="hairCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(7)
                });

                $('input[name="handCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(7)
                });

                $('input[name="footCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(7)
                });

                $('input[name="beardCosmeticUse"]').change(function () {
                    surveyQuestionRemoveClass(7)
                });

                /* question 9 add click management for checkboxes */
                $('input[name="purchaseLocation[]"]').change(function () {
                    surveyQuestionRemoveClass(8)
                });

                /* question 9 add writing management for the input text */
                $("#purchaseLocationComment1").keydown(function () {
                    surveyQuestionRemoveClass(8);
                    checkThisElement(purchaseLocationChoice7);
                    var keyCode = event.which;
                    var internetPurchaseLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(internetPurchaseLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                $("#purchaseLocationComment2").keydown(function () {
                    surveyQuestionRemoveClass(8);
                    checkThisElement(purchaseLocationChoice8);
                    var keyCode = event.which;
                    var townPurchaseLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(townPurchaseLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                $("#purchaseLocationComment3").keydown(function () {
                    surveyQuestionRemoveClass(8);
                    checkThisElement(purchaseLocationChoice11);
                    var keyCode = event.which;
                    var otherPurchaseLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherPurchaseLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 10 add click management for checkboxes */
                $('input[name="preferredUseMode[]"]').change(function () {
                    surveyQuestionRemoveClass(9)
                });

                /* question 10 add writing management for the input text */
                $("#preferredUseModeComment1").keydown(function () {
                    surveyQuestionRemoveClass(9);
                    checkThisElement(preferredUseModeChoice10);
                    var keyCode = event.which;
                    var otherModeLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherModeLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 11 add click management for the radio buttons */
                $('input[name="needAdvice"]').change(function () {
                    surveyQuestionRemoveClass(10)
                });

                /* question 12 add writing management for the textarea */
                whyNeedAdvice.keydown(function () {
                    surveyQuestionRemoveClass(11);
                    var keyCode = event.which;
                    var whyNeedAdviceLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-' .";
                    return !!(whyNeedAdviceLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 13 add click management for the radio buttons */
                $('input[name="skinProductsDifficulties"]').change(function () {
                    surveyQuestionRemoveClass(12)
                });

                $('input[name="hairProductsDifficulties"]').change(function () {
                    surveyQuestionRemoveClass(12)
                });

                /* question 14 add click management for checkboxes */
                $('input[name="whyProductsDifficulties[]"]').change(function () {
                    surveyQuestionRemoveClass(13)
                });

                /* question 14 add writing management for the input text */
                $("#whyProductsDifficultiesComment1").keydown(function () {
                    surveyQuestionRemoveClass(13);
                    checkThisElement(whyProductsDifficultiesChoice3);
                    var keyCode = event.which;
                    var otherProductsDifficultiesLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherProductsDifficultiesLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 15 add click management for checkboxes */
                $('input[name="changeHairAppearance[]"]').change(function () {
                    surveyQuestionRemoveClass(14)
                });

                /* question 15 add writing management for the input text */
                $("#changeHairAppearanceComment1").keydown(function () {
                    surveyQuestionRemoveClass(14);
                    checkThisElement(changeHairAppearanceChoice13);
                    var keyCode = event.which;
                    var otherChangeHairAppearanceLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherChangeHairAppearanceLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 16 add click management for checkboxes */
                $('input[name="placeChangeHairAppearance[]"]').change(function () {
                    surveyQuestionRemoveClass(15)
                });

                /* question 16 add click management for the input text */
                $("#placeChangeHairAppearanceComment1").keydown(function () {
                    surveyQuestionRemoveClass(15);
                    checkThisElement(placeChangeHairAppearanceChoice10);
                    var keyCode = event.which;
                    var otherPlaceChangeHairLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ- .";
                    return !!(otherPlaceChangeHairLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* question 17 add click management for the radio buttons */
                $('input[name="skinPriceAndFrequencyUse"]').change(function () {
                    surveyQuestionRemoveClass(16)
                });

                /* question 18 add click management for the radio buttons */
                $('input[name="hairPriceAndFrequencyUse"]').change(function () {
                    surveyQuestionRemoveClass(17)
                });

                /* question 19 add click management for the radio buttons */
                $('input[name="cosmeticsPurchaseSatisfaction"]').change(function () {
                    surveyQuestionRemoveClass(18)
                });

                /* question 20 add writing management for the textarea */
                whyDissatisfactionCosmeticsUse.keydown(function () {
                    surveyQuestionRemoveClass(19);
                    var keyCode = event.which;
                    var whyDissatisfactionLetteringAccepted = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-' .";
                    return !!(whyDissatisfactionLetteringAccepted.indexOf(String.fromCharCode(keyCode)) >= 0 || keyCode == 8);
                });

                /* add click management fot the button "suite" */
                $('#surveyPart1Submit').click(function () {

                    /* question 1 gender checking verification */
                    if (!maleGender.is(":checked") && !$("#femaleGender").is(":checked")) {
                        alert('Veuillez cocher votre genre.');
                        maleGender.focus();
                        surveyQuestion.eq(0).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 2 town writing verification */
                    if (!town.val()) {
                        alert('Veuillez saisir votre ville.');
                        town.focus();
                        surveyQuestion.eq(1).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 2 postal code writing verification */
                    if (!postalCode.val()) {
                        alert('Veuillez saisir votre code postal.');
                        postalCode.focus();
                        surveyQuestion.eq(1).addClass("surveyQuestionFocus");
                        return false;
                    } else if (postalCode.val().length != 5) {
                        alert('Le format de votre code postal n\'est pas valide.');
                        postalCode.focus();
                        surveyQuestion.eq(1).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 3 age checking verification */
                    if (!$('input[name="age"]').is(":checked")) {
                        alert('Veuillez cocher votre tranche d\'âge.');
                        $("#ageChoice1").focus();
                        surveyQuestion.eq(2).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 4 birth year writing verification */
                    if (!birthYear.val()) {
                        alert('Veuillez saisir votre année de naissance.');
                        birthYear.focus();
                        surveyQuestion.eq(3).addClass("surveyQuestionFocus");
                        return false;
                    } else if (birthYear.val().length != 4) {
                        alert('Le format de votre année de naissance n\'est pas valide.');
                        birthYear.focus();
                        surveyQuestion.eq(3).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 5 skin tone checking verification */
                    if (!$('input[name="skinTone"]').is(":checked")) {
                        alert('Veuillez cocher votre teinte de peau.');
                        $("#skinToneChoice1").focus();
                        surveyQuestion.eq(4).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question  6 skin feature checking verification */
                    var question7NumberOfCheckboxChecked = $('input[name="skinFeature[]"]:checked').length;
                    if (question7NumberOfCheckboxChecked == 0) {
                        alert('Veuillez cocher votre type de peau.');
                        $("#skinFeatureChoice1").focus();
                        surveyQuestion.eq(5).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 7 hair type checking verification */
                    if (!$('input[name="hairType"]').is(":checked")) {
                        alert('Veuillez cocher la nature de vos cheveux.');
                        $("#hairTypeChoice1").focus();
                        surveyQuestion.eq(6).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 8 cosmeticsUse checking verification */
                    if (!$('input[name="faceCosmeticUse"]').is(":checked")) {
                        alert('Veuillez cocher votre usage des produits de beauté.');
                        $("#faceCosmeticUseChoice1").focus();
                        surveyQuestion.eq(7).addClass("surveyQuestionFocus");
                        return false;
                    } else if (!$('input[name="bodyCosmeticUse"]').is(":checked")) {
                        alert('Veuillez cocher votre usage des produits de beauté.');
                        $("#faceCosmeticUseChoice1").focus();
                        surveyQuestion.eq(7).addClass("surveyQuestionFocus");
                        return false;
                    } else if (!$('input[name="hairCosmeticUse"]').is(":checked")) {
                        alert('Veuillez cocher votre usage des produits de beauté.');
                        $("#faceCosmeticUseChoice1").focus();
                        surveyQuestion.eq(7).addClass("surveyQuestionFocus");
                        return false;
                    } else if (!$('input[name="handCosmeticUse"]').is(":checked")) {
                        alert('Veuillez cocher votre usage des produits de beauté.');
                        $("#faceCosmeticUseChoice1").focus();
                        surveyQuestion.eq(7).addClass("surveyQuestionFocus");
                        return false;
                    } else if (!$('input[name="footCosmeticUse"]').is(":checked")) {
                        alert('Veuillez cocher votre usage des produits de beauté.');
                        $("#faceCosmeticUseChoice1").focus();
                        surveyQuestion.eq(7).addClass("surveyQuestionFocus");
                        return false;
                    } else if (!$('input[name="beardCosmeticUse"]').is(":checked")) {
                        alert('Veuillez cocher votre usage des produits de beauté.');
                        $("#faceCosmeticUseChoice1").focus();
                        surveyQuestion.eq(7).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 9 purchase location checking verification */
                    var question9NumberOfCheckboxChecked = $('input[name="purchaseLocation[]"]:checked').length;
                    if (question9NumberOfCheckboxChecked == 0) {
                        alert('Veuillez cocher l\'endroit où vous trouvez ces produits');
                        $("#purchaseLocationChoice1").focus();
                        surveyQuestion.eq(8).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (purchaseLocationChoice7.is(":checked") && !$("#purchaseLocationComment1").val()) {
                        alert('Veuillez saisir le site internet sur lequel vous achetez vos produits.');
                        purchaseLocationChoice7.focus();
                        $(".surveyQuestion").eq(8).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (purchaseLocationChoice8.is(":checked") && !$("#purchaseLocationComment2").val()) {
                        alert('Veuillez saisir dans quelle ville/région vous achetez vos produits.');
                        purchaseLocationChoice8.focus();
                        surveyQuestion.eq(8).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (purchaseLocationChoice11.is(":checked") && !$("#purchaseLocationComment3").val()) {
                        alert('Veuillez saisir où vous achetez vos produits.');
                        purchaseLocationChoice11.focus();
                        surveyQuestion.eq(8).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 10 preferred use mode checking verification */
                    var question10NumberOfCheckboxChecked = $('input[name="preferredUseMode[]"]:checked').length;
                    if (question10NumberOfCheckboxChecked == 0) {
                        alert('Veuillez cocher votre mode d\'utilisation préféré.');
                        $("#preferredUseModeChoice1").focus();
                        surveyQuestion.eq(9).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (preferredUseModeChoice10.is(":checked") && !$("#preferredUseModeComment1").val()) {
                        alert('Veuillez saisir l\'autre endroit où vous achetez vos produits.');
                        preferredUseModeChoice10.focus();
                        surveyQuestion.eq(9).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 11 need advice checking verification */
                    if (!$('input[name="needAdvice"]').is(":checked")) {
                        alert('Veuillez cocher si vous avez besoin d\'être conseillé(e) ou pas.');
                        $("#needAdviceChoice1").focus();
                        surveyQuestion.eq(10).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 12 why need advice writing verification */
                    if (!whyNeedAdvice.val()) {
                        alert('Veuillez saisir la raison pour laquelle vous avez ou non besoin de conseils.');
                        whyNeedAdvice.focus();
                        surveyQuestion.eq(11).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 13 products difficulties checking verification */
                    if (!$('input[name="skinProductsDifficulties"]').is(":checked")) {
                        alert('Veuillez cocher si vous rencontrez des difficultés à trouver des produits adaptés pour votre peau.');
                        $("#skinProductsDifficultiesChoice1").focus();
                        surveyQuestion.eq(12).addClass("surveyQuestionFocus");
                        return false;
                    } else if (!$('input[name="hairProductsDifficulties"]').is(":checked")) {
                        alert('Veuillez cocher si vous rencontrez des difficultés à trouver des produits adaptés pour vos cheveux.');
                        $("#hairProductsDifficultiesChoice1").focus();
                        surveyQuestion.eq(12).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 14 why products difficulties checking verification */
                    if (!$("#skinProductsDifficultiesChoice2").is(":checked") || !$("#hairProductsDifficultiesChoice2").is(":checked")) {
                        var question14NumberOfCheckboxChecked = $('input[name="whyProductsDifficulties[]"]:checked').length;
                        if (question14NumberOfCheckboxChecked == 0) {
                            alert('Veuillez cocher pourquoi vous rencontrez des difficultés à trouver ces produits.');
                            $("#whyProductsDifficultiesChoice1").focus();
                            surveyQuestion.eq(13).addClass("surveyQuestionFocus");
                            return false;
                        }

                        if (whyProductsDifficultiesChoice3.is(":checked") && !$("#whyProductsDifficultiesComment1").val()) {
                            alert('Veuillez saisir l\'autre motif pour lequel vous rencontrez des difficultés à trouvez ces produits.');
                            whyProductsDifficultiesChoice3.focus();
                            surveyQuestion.eq(13).addClass("surveyQuestionFocus");
                            return false;
                        }
                    }

                    /* question 15 change hair appearance checking verification */
                    var question15NumberOfCheckboxChecked = $('input[name="changeHairAppearance[]"]:checked').length;
                    if (question15NumberOfCheckboxChecked == 0) {
                        alert('Veuillez cocher la façon dont vous modifiez vos cheveux.');
                        $("#changeHairAppearanceChoice1").focus();
                        surveyQuestion.eq(14).addClass("surveyQuestionFocus");
                        return false;
                    }

                    if (changeHairAppearanceChoice13.is(":checked") && !$("#changeHairAppearanceComment1").val()) {
                        alert('Veuillez saisir l\'autre façon dont vous modifier l\'aspect de vos cheveux');
                        changeHairAppearanceChoice13.focus();
                        surveyQuestion.eq(14).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 16 place change hair appearance checking verification */
                    if (!$("#changeHairAppearanceChoice12").is(":checked")) {
                        var question16NumberOfCheckboxChecked = $('input[name="placeChangeHairAppearance[]"]:checked').length;
                        if (question16NumberOfCheckboxChecked == 0) {
                            alert('Veuillez cocher où vous vous rendez pour trouver les produits nécessaires à la modification de vos cheveux.');
                            $("#changeHairAppearanceChoice1").focus();
                            surveyQuestion.eq(15).addClass("surveyQuestionFocus");
                            return false;
                        }

                        if (placeChangeHairAppearanceChoice10.is(":checked") && !$("#placeChangeHairAppearanceComment1").val()) {
                            alert('Veuillez saisir l\'autre endroit où vous vous rendez pour trouvez les produits nécessaires à la modification de vos cheveux.');
                            placeChangeHairAppearanceChoice10.focus();
                            surveyQuestion.eq(15).addClass("surveyQuestionFocus");
                            return false;
                        }
                    }

                    /* question 17 skin price and frequency use checking verification */
                    if (!$('input[name="skinPriceAndFrequencyUse"]').is(":checked")) {
                        alert('Veuillez cocher la fourchette de prix et la fréquence qui correspond à vos habitudes d\'achats.');
                        $("#skinPriceAndFrequencyUseChoice1").focus();
                        surveyQuestion.eq(16).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 18 hair price and frequency use checking verification */
                    if (!$('input[name="hairPriceAndFrequencyUse"]').is(":checked")) {
                        alert('Veuillez cocher la fourchette de prix et la fréquence qui correspond à vos habitudes d\'achats.');
                        $("#hairPriceAndFrequencyUseChoice1").focus();
                        surveyQuestion.eq(17).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 19 purchase satisfaction checking verification */
                    if (!$('input[name="cosmeticsPurchaseSatisfaction"]').is(":checked")) {
                        alert('Veuillez cocher votre degré de satisfaction pour vos achats en cosmétique.');
                        cosmeticsPurchaseSatisfactionChoice1.focus();
                        surveyQuestion.eq(18).addClass("surveyQuestionFocus");
                        return false;
                    }

                    /* question 20 why dissatisfaction cosmetics use writing verification */
                    if (!cosmeticsPurchaseSatisfactionChoice1.is(":checked")) {
                        if (!whyDissatisfactionCosmeticsUse.val()) {
                            alert('Veuillez saisir la raison pour laquelle vous êtes moyennement/pas satisfait des cosmétiques que vous achetez.');
                            whyDissatisfactionCosmeticsUse.focus();
                            surveyQuestion.eq(19).addClass("surveyQuestionFocus");
                            return false;
                        }
                    }

                })

            })
        }
    };
    formValidationAnalyseSurveyPart1.init()
})();
