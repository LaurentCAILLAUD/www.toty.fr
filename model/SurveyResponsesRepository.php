<?php

class SurveyResponsesRepository
{

    /* Property declaration */
    protected $dbh;

    /* Constructor declaration */
    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    /* Creating a function who is recover all respondents answers in database */
    public function getAllRespondentsAnswers()
    {
        $stmt = $this->dbh->prepare('SELECT * FROM surveyResponses');
        $stmt->execute();
        $errorInRecoveringRespondentsAnswers = $stmt->errorInfo();
        if ($errorInRecoveringRespondentsAnswers[0] != '0') {
            throw new Exception('A problem is occurred during the recovering of respondents answers. Error message: ' . $errorInRecoveringRespondentsAnswers[2]);
        } else {
            $respondentsAnswers = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $respondentsAnswers[$row['probe_id']]['gender'] = $row['gender'];
                $respondentsAnswers[$row['probe_id']]['town'] = $row['town'];
                $respondentsAnswers[$row['probe_id']]['postalCode'] = $row['postal_code'];
                $respondentsAnswers[$row['probe_id']]['age'] = $row['age'];
                $respondentsAnswers[$row['probe_id']]['birthYear'] = $row['birth_year'];
                $respondentsAnswers[$row['probe_id']]['skinTone'] = $row['skin_tone'];
                $respondentsAnswers[$row['probe_id']]['skinFeature'] = unserialize($row['skin_feature']);
                $respondentsAnswers[$row['probe_id']]['hairType'] = $row['hair_type'];
                $respondentsAnswers[$row['probe_id']]['faceCosmeticsUse'] = $row['face_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['bodyCosmeticsUse'] = $row['body_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['hairCosmeticsUse'] = $row['hair_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['handCosmeticsUse'] = $row['hand_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['footCosmeticsUse'] = $row['foot_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['beardCosmeticsUse'] = $row['beard_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['purchaseLocation'] = unserialize($row['purchase_location']);
                $respondentsAnswers[$row['probe_id']]['internetPurchaseLocation'] = $row['internet_purchase_location'];
                $respondentsAnswers[$row['probe_id']]['otherTownPurchaseLocation'] = $row['other_town_purchase_location'];
                $respondentsAnswers[$row['probe_id']]['otherPurchaseLocation'] = $row['other_purchase_location'];
                $respondentsAnswers[$row['probe_id']]['preferredUseMode'] = unserialize($row['preferred_use_mode']);
                $respondentsAnswers[$row['probe_id']]['otherPreferredUseMode'] = $row['other_preferred_use_mode'];
                $respondentsAnswers[$row['probe_id']]['needAdvice'] = $row['need_advice'];
                $respondentsAnswers[$row['probe_id']]['whyNeedAdvice'] = $row['why_need_advice'];
                $respondentsAnswers[$row['probe_id']]['skinProductsDifficulties'] = $row['skin_products_difficulties'];
                $respondentsAnswers[$row['probe_id']]['hairProductsDifficulties'] = $row['hair_products_difficulties'];
                if ($row['why_products_difficulties'] == "-") {
                    $respondentsAnswers[$row['probe_id']]['whyProductsDifficulties'] = $row['why_products_difficulties'];
                } else {
                    $respondentsAnswers[$row['probe_id']]['whyProductsDifficulties'] = unserialize($row['why_products_difficulties']);
                }
                $respondentsAnswers[$row['probe_id']]['otherWhyProductsDifficulties'] = $row['other_why_products_difficulties'];
                $respondentsAnswers[$row['probe_id']]['changeHairAppearance'] = unserialize($row['change_hair_appearance']);
                $respondentsAnswers[$row['probe_id']]['otherChangeHairAppearance'] = $row['other_change_hair_appearance'];
                if ($row['place_change_hair_appearance'] == "-") {
                    $respondentsAnswers[$row['probe_id']]['placeChangeHairAppearance'] = $row['place_change_hair_appearance'];
                } else {
                    $respondentsAnswers[$row['probe_id']]['placeChangeHairAppearance'] = unserialize($row['place_change_hair_appearance']);
                }
                $respondentsAnswers[$row['probe_id']]['otherPlaceChangeHairAppearance'] = $row['other_place_change_hair_appearance'];
                $respondentsAnswers[$row['probe_id']]['skinPriceAndFrequencyUse'] = $row['skin_price_and_frequency_use'];
                $respondentsAnswers[$row['probe_id']]['hairPriceAndFrequencyUse'] = $row['hair_price_and_frequency_use'];
                $respondentsAnswers[$row['probe_id']]['cosmeticsPurchaseSatisfaction'] = $row['cosmetics_purchase_satisfaction'];
                $respondentsAnswers[$row['probe_id']]['whyDissatisfactionCosmeticsUse'] = $row['why_dissatisfaction_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['hairCareWaiting'] = unserialize($row['hair_care_waiting']);
                $respondentsAnswers[$row['probe_id']]['otherHairCareWaiting'] = $row['other_hair_care_waiting'];
                $respondentsAnswers[$row['probe_id']]['bodyCareWaiting'] = unserialize($row['body_care_waiting']);
                $respondentsAnswers[$row['probe_id']]['otherBodyCareWaiting'] = $row['other_body_care_waiting'];
                $respondentsAnswers[$row['probe_id']]['packingInformation'] = unserialize($row['packing_information']);
                $respondentsAnswers[$row['probe_id']]['otherPackingInformation'] = $row['other_packing_information'];
                $respondentsAnswers[$row['probe_id']]['packagingType'] = unserialize($row['packaging_type']);
                $respondentsAnswers[$row['probe_id']]['otherPackagingType'] = $row['other_packaging_type'];
                $respondentsAnswers[$row['probe_id']]['homeMeeting'] = $row['home_meeting'];
                $respondentsAnswers[$row['probe_id']]['friendMeeting'] = $row['friend_meeting'];
                $respondentsAnswers[$row['probe_id']]['whyRefuseMeeting'] = $row['why_refuse_meeting'];
                $respondentsAnswers[$row['probe_id']]['hasChild'] = $row['has_child'];
                if ($row['age_category'] == "-") {
                    $respondentsAnswers[$row['probe_id']]['ageCategory'] = $row['age_category'];
                } else {
                    $respondentsAnswers[$row['probe_id']]['ageCategory'] = unserialize($row['age_category']);
                }
                $respondentsAnswers[$row['probe_id']]['applyCosmeticsProducts'] = $row['apply_cosmetics_products'];
                $respondentsAnswers[$row['probe_id']]['whyNoApplyProducts'] = $row['why_no_apply_products'];
                $respondentsAnswers[$row['probe_id']]['frequencyFaceCosmeticsUse'] = $row['frequency_face_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['frequencyHairCosmeticsUse'] = $row['frequency_hair_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['frequencyBodyCosmeticsUse'] = $row['frequency_body_cosmetics_use'];
                if ($row['products_location'] == "-") {
                    $respondentsAnswers[$row['probe_id']]['productsLocation'] = $row['products_location'];
                } else {
                    $respondentsAnswers[$row['probe_id']]['productsLocation'] = unserialize($row['products_location']);
                }
                $respondentsAnswers[$row['probe_id']]['internetProductsLocation'] = $row['internet_products_location'];
                $respondentsAnswers[$row['probe_id']]['otherTownProductsLocation'] = $row['other_town_products_location'];
                $respondentsAnswers[$row['probe_id']]['otherProductsLocation'] = $row['other_products_location'];
                if ($row['favourite_use_mode'] == "-") {
                    $respondentsAnswers[$row['probe_id']]['favouriteUseMode'] = $row['favourite_use_mode'];
                } else {
                    $respondentsAnswers[$row['probe_id']]['favouriteUseMode'] = unserialize($row['favourite_use_mode']);
                }
                $respondentsAnswers[$row['probe_id']]['otherFavouriteUseMode'] = $row['other_favourite_use_mode'];
                $respondentsAnswers[$row['probe_id']]['hairFrequencyAndPriceUse'] = $row['hair_frequency_and_price_use'];
                $respondentsAnswers[$row['probe_id']]['skinFrequencyAndPriceUse'] = $row['skin_frequency_and_price_use'];
                $respondentsAnswers[$row['probe_id']]['childCosmeticsPurchaseSatisfaction'] = $row['child_cosmetics_purchase_satisfaction'];
                $respondentsAnswers[$row['probe_id']]['whyDissatisfactionChildCosmeticsUse'] = $row['why_dissatisfaction_child_cosmetics_use'];
                $respondentsAnswers[$row['probe_id']]['socialMediaUse'] = unserialize($row['social_media_use']);
                $respondentsAnswers[$row['probe_id']]['otherSocialMediaUse'] = $row['other_social_media_use'];
                $respondentsAnswers[$row['probe_id']]['joinPhone'] = $row['join_phone'];
                $respondentsAnswers[$row['probe_id']]['joinMail'] = $row['join_mail'];
                $respondentsAnswers[$row['probe_id']]['phoneNumber'] = $row['phone_number'];
                $respondentsAnswers[$row['probe_id']]['mailAddress'] = $row['mail_address'];
            }
            return $respondentsAnswers;
        }
    }
}

