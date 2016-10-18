<?php

class SurveyResponsesManager
{

    /* Property declaration */
    protected $dbh;

    /* Constructor declaration */
    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    /* Creating a function who insert survey responses in database */
    public function insertSurveyResponses($surveyResponses)
    {
        $stmt = $this->dbh->prepare('INSERT INTO surveyResponses (gender, town, postal_code, age, birth_year, skin_tone, skin_feature, hair_type, 
        face_cosmetics_use, body_cosmetics_use, hair_cosmetics_use, hand_cosmetics_use, foot_cosmetics_use, beard_cosmetics_use, purchase_location, 
        internet_purchase_location, other_town_purchase_location, other_purchase_location, preferred_use_mode, other_preferred_use_mode, 
        need_advice, why_need_advice, skin_products_difficulties, hair_products_difficulties, why_products_difficulties, other_why_products_difficulties, 
        change_hair_appearance, other_change_hair_appearance, place_change_hair_appearance, other_place_change_hair_appearance, 
        skin_price_and_frequency_use, hair_price_and_frequency_use, cosmetics_purchase_satisfaction, why_dissatisfaction_cosmetics_use, 
        hair_care_waiting, other_hair_care_waiting, body_care_waiting, other_body_care_waiting, packing_information, other_packing_information,
        packaging_type, other_packaging_type, home_meeting, friend_meeting, why_refuse_meeting, has_child, age_category, apply_cosmetics_products,
        why_no_apply_products, frequency_face_cosmetics_use, frequency_hair_cosmetics_use, frequency_body_cosmetics_use, products_location,
        internet_products_location, other_town_products_location, other_products_location, favourite_use_mode, other_favourite_use_mode,
        hair_frequency_and_price_use, skin_frequency_and_price_use, child_cosmetics_purchase_satisfaction, why_dissatisfaction_child_cosmetics_use,
        social_media_use, other_social_media_use, join_phone, join_mail, phone_number, mail_address) 
        VALUES (:gender, :town, :postalCode, :age, :birthYear, :skinTone, :skinFeature, :hairType, :faceCosmeticsUse, :bodyCosmeticsUse, :hairCosmeticsUse, 
        :handCosmeticsUse, :footCosmeticsUse, :beardCosmeticsUse, :purchaseLocation, :internetPurchaseLocation, :otherTownPurchaseLocation, 
        :otherPurchaseLocation, :preferredUseMode, :otherPreferredUseMode, :needAdvice, :whyNeedAdvice, :skinProductsDifficulties, :hairProductsDifficulties, 
        :whyProductsDifficulties, :otherWhyProductsDifficulties, :changeHairAppearance, :otherChangeHairAppearance, :placeChangeHairAppearance, 
        :otherPlaceChangeHairAppearance, :skinPriceAndFrequencyUse, :hairPriceAndFrequencyUse, :cosmeticsPurchaseSatisfaction, 
        :whyDissatisfactionCosmeticsUse, :hairCareWaiting, :otherHairCareWaiting, :bodyCareWaiting, :otherBodyCareWaiting, :packingInformation, 
        :otherPackingInformation, :packagingType, :otherPackagingType, :homeMeeting, :friendMeeting, :whyRefuseMeeting, :hasChild, :ageCategory, 
        :applyCosmeticsProducts, :whyNoApplyProducts, :frequencyFaceCosmeticsUse, :frequencyHairCosmeticsUse, :frequencyBodyCosmeticsUse, 
        :productsLocation, :internetProductsLocation, :otherTownProductsLocation, :otherProductsLocation, :favouriteUseMode, :otherFavouriteUseMode,
        :hairFrequencyAndPriceUse, :skinFrequencyAndPriceUse, :childCosmeticsPurchaseSatisfaction, :whyDissatisfactionChildCosmeticsUse, 
        :socialMediaUse, :otherSocialMediaUse, :joinPhone, :joinMail, :phoneNumber, :mailAddress)');
        $gender = $surveyResponses->getGender();
        $town = $surveyResponses->getTown();
        $postalCode = $surveyResponses->getPostalCode();
        $birthYear = $surveyResponses->getBirthYear();
        $age = $surveyResponses->getAge();
        $skinTone = $surveyResponses->getSkinTone();
        $skinFeature = $surveyResponses->getSkinFeature();
        $hairType = $surveyResponses->getHairType();
        $faceCosmeticsUse = $surveyResponses->getFaceCosmeticsUse();
        $bodyCosmeticsUse = $surveyResponses->getBodyCosmeticsUse();
        $hairCosmeticsUse = $surveyResponses->getHairCosmeticsUse();
        $handCosmeticsUse = $surveyResponses->getHandCosmeticsUse();
        $footCosmeticsUse = $surveyResponses->getFootCosmeticsUse();
        $beardCosmeticsUse = $surveyResponses->getBeardCosmeticsUse();
        $purchaseLocation = $surveyResponses->getPurchaseLocation();
        $internetPurchaseLocation = $surveyResponses->getInternetPurchaseLocation();
        $otherTownPurchaseLocation = $surveyResponses->getOtherTownPurchaseLocation();
        $otherPurchaseLocation = $surveyResponses->getOtherPurchaseLocation();
        $preferredUseMode = $surveyResponses->getPreferredUseMode();
        $otherPreferredUseMode = $surveyResponses->getOtherPreferredUseMode();
        $needAdvice = $surveyResponses->getNeedAdvice();
        $whyNeedAdvice = $surveyResponses->getWhyNeedAdvice();
        $skinProductsDifficulties = $surveyResponses->getSkinProductsDifficulties();
        $hairProductsDifficulties = $surveyResponses->getHairProductsDifficulties();
        $whyProductsDifficulties = $surveyResponses->getWhyproductsDifficulties();
        $otherWhyProductsDifficulties = $surveyResponses->getOtherWhyProductsDifficulties();
        $changeHairAppearance = $surveyResponses->getChangeHairAppearance();
        $otherChangeHairAppearance = $surveyResponses->getOtherChangeHairAppearance();
        $placeChangeHairAppearance = $surveyResponses->getPlaceChangeHairAppearance();
        $otherPlaceChangeHairAppearance = $surveyResponses->getOtherPlaceChangeHairAppearance();
        $skinPriceAndFrequencyUse = $surveyResponses->getSkinPriceAndFrequencyUse();
        $hairPriceAndFrequencyUse = $surveyResponses->getHairPriceAndFrequencyUse();
        $cosmeticsPurchaseSatisfaction = $surveyResponses->getCosmeticsPurchaseSatisfaction();
        $whyDissatisfactionCosmeticsUse = $surveyResponses->getWhyDissatisfactionCosmeticsUse();
        $hairCareWaiting = $surveyResponses->getHairCareWaiting();
        $otherHairCareWaiting = $surveyResponses->getOtherHairCareWaiting();
        $bodyCareWaiting = $surveyResponses->getBodyCareWaiting();
        $otherBodyCareWaiting = $surveyResponses->getOtherBodyCareWaiting();
        $packingInformation = $surveyResponses->getPackingInformation();
        $otherPackingInformation = $surveyResponses->getOtherPackingInformation();
        $packagingType = $surveyResponses->getPackagingType();
        $otherPackagingType = $surveyResponses->getOtherPackagingType();
        $homeMeeting = $surveyResponses->getHomeMeeting();
        $friendMeeting = $surveyResponses->getFriendMeeting();
        $whyRefuseMeeting = $surveyResponses->getWhyRefuseMeeting();
        $hasChild = $surveyResponses->getHasChild();
        $ageCategory = $surveyResponses->getAgeCategory();
        $applyCosmeticsProducts = $surveyResponses->getApplyCosmeticsProducts();
        $whyNoApplyProducts = $surveyResponses->getWhyNoApplyProducts();
        $frequencyFaceCosmeticsUse = $surveyResponses->getFrequencyFaceCosmeticsUse();
        $frequencyHairCosmeticsUse = $surveyResponses->getFrequencyHairCosmeticsUse();
        $frequencyBodyCosmeticsUse = $surveyResponses->getFrequencyBodyCosmeticsUse();
        $productsLocation = $surveyResponses->getProductsLocation();
        $internetProductsLocation = $surveyResponses->getInternetProductsLocation();
        $otherTownProductsLocation = $surveyResponses->getOtherTownProductsLocation();
        $otherProductsLocation = $surveyResponses->getOtherProductsLocation();
        $favouriteUseMode = $surveyResponses->getFavouriteUseMode();
        $otherFavouriteUseMode = $surveyResponses->getOtherFavouriteUseMode();
        $hairFrequencyAndPriceUse = $surveyResponses->getHairFrequencyAndPriceUse();
        $skinFrequencyAndPriceUse = $surveyResponses->getSkinFrequencyAndPriceUse();
        $childCosmeticsPurchaseSatisfaction = $surveyResponses->getChildCosmeticsPurchaseSatisfaction();
        $whyDissatisfactionChildCosmeticsUse = $surveyResponses->getWhyDissatisfactionChildCosmeticsUse();
        $socialMediaUse = $surveyResponses->getSocialMediaUse();
        $otherSocialMediaUse = $surveyResponses->getOtherSocialMediaUse();
        $joinPhone = $surveyResponses->getJoinPhone();
        $joinMail = $surveyResponses->getJoinMail();
        $phoneNumber = $surveyResponses->getPhoneNumber();
        $mailAddress = $surveyResponses->getMailAddress();
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':town', $town);
        $stmt->bindParam(':postalCode', $postalCode);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':birthYear', $birthYear);
        $stmt->bindParam(':skinTone', $skinTone);
        $stmt->bindParam(':skinFeature', $skinFeature);
        $stmt->bindParam(':hairType', $hairType);
        $stmt->bindParam(':faceCosmeticsUse', $faceCosmeticsUse);
        $stmt->bindParam(':bodyCosmeticsUse', $bodyCosmeticsUse);
        $stmt->bindParam(':hairCosmeticsUse', $hairCosmeticsUse);
        $stmt->bindParam(':handCosmeticsUse', $handCosmeticsUse);
        $stmt->bindParam(':footCosmeticsUse', $footCosmeticsUse);
        $stmt->bindParam(':beardCosmeticsUse', $beardCosmeticsUse);
        $stmt->bindParam(':purchaseLocation', $purchaseLocation);
        $stmt->bindParam(':internetPurchaseLocation', $internetPurchaseLocation);
        $stmt->bindParam(':otherTownPurchaseLocation', $otherTownPurchaseLocation);
        $stmt->bindParam(':otherPurchaseLocation', $otherPurchaseLocation);
        $stmt->bindParam(':preferredUseMode', $preferredUseMode);
        $stmt->bindParam(':otherPreferredUseMode', $otherPreferredUseMode);
        $stmt->bindParam(':needAdvice', $needAdvice);
        $stmt->bindParam(':whyNeedAdvice', $whyNeedAdvice);
        $stmt->bindParam(':skinProductsDifficulties', $skinProductsDifficulties);
        $stmt->bindParam(':hairProductsDifficulties', $hairProductsDifficulties);
        $stmt->bindParam(':whyProductsDifficulties', $whyProductsDifficulties);
        $stmt->bindParam(':otherWhyProductsDifficulties', $otherWhyProductsDifficulties);
        $stmt->bindParam(':changeHairAppearance', $changeHairAppearance);
        $stmt->bindParam(':otherChangeHairAppearance', $otherChangeHairAppearance);
        $stmt->bindParam(':placeChangeHairAppearance', $placeChangeHairAppearance);
        $stmt->bindParam(':otherPlaceChangeHairAppearance', $otherPlaceChangeHairAppearance);
        $stmt->bindParam(':skinPriceAndFrequencyUse', $skinPriceAndFrequencyUse);
        $stmt->bindParam(':hairPriceAndFrequencyUse', $hairPriceAndFrequencyUse);
        $stmt->bindParam(':cosmeticsPurchaseSatisfaction', $cosmeticsPurchaseSatisfaction);
        $stmt->bindParam(':whyDissatisfactionCosmeticsUse', $whyDissatisfactionCosmeticsUse);
        $stmt->bindParam(':hairCareWaiting', $hairCareWaiting);
        $stmt->bindParam(':otherHairCareWaiting', $otherHairCareWaiting);
        $stmt->bindParam(':bodyCareWaiting', $bodyCareWaiting);
        $stmt->bindParam(':otherBodyCareWaiting', $otherBodyCareWaiting);
        $stmt->bindParam(':packingInformation', $packingInformation);
        $stmt->bindParam(':otherPackingInformation', $otherPackingInformation);
        $stmt->bindParam(':packagingType', $packagingType);
        $stmt->bindparam(':otherPackagingType', $otherPackagingType);
        $stmt->bindparam(':homeMeeting', $homeMeeting);
        $stmt->bindParam(':friendMeeting', $friendMeeting);
        $stmt->bindParam(':whyRefuseMeeting', $whyRefuseMeeting);
        $stmt->bindparam(':hasChild', $hasChild);
        $stmt->bindparam(':ageCategory', $ageCategory);
        $stmt->bindParam(':applyCosmeticsProducts', $applyCosmeticsProducts);
        $stmt->bindParam(':whyNoApplyProducts', $whyNoApplyProducts);
        $stmt->bindParam(':frequencyFaceCosmeticsUse', $frequencyFaceCosmeticsUse);
        $stmt->bindParam(':frequencyHairCosmeticsUse', $frequencyHairCosmeticsUse);
        $stmt->bindParam(':frequencyBodyCosmeticsUse', $frequencyBodyCosmeticsUse);
        $stmt->bindParam(':productsLocation', $productsLocation);
        $stmt->bindParam(':internetProductsLocation', $internetProductsLocation);
        $stmt->bindParam(':otherTownProductsLocation', $otherTownProductsLocation);
        $stmt->bindParam(':otherProductsLocation', $otherProductsLocation);
        $stmt->bindParam(':favouriteUseMode', $favouriteUseMode);
        $stmt->bindParam(':otherFavouriteUseMode', $otherFavouriteUseMode);
        $stmt->bindParam(':hairFrequencyAndPriceUse', $hairFrequencyAndPriceUse);
        $stmt->bindParam(':skinFrequencyAndPriceUse', $skinFrequencyAndPriceUse);
        $stmt->bindParam(':childCosmeticsPurchaseSatisfaction', $childCosmeticsPurchaseSatisfaction);
        $stmt->bindParam(':whyDissatisfactionChildCosmeticsUse', $whyDissatisfactionChildCosmeticsUse);
        $stmt->bindParam(':socialMediaUse', $socialMediaUse);
        $stmt->bindParam(':otherSocialMediaUse', $otherSocialMediaUse);
        $stmt->bindParam(':joinPhone', $joinPhone);
        $stmt->bindParam(':joinMail', $joinMail);
        $stmt->bindParam(':phoneNumber', $phoneNumber);
        $stmt->bindParam(':mailAddress', $mailAddress);
        $stmt->execute();
    }

    /* Creating a function who delete respondent answers with his id */
    public function deleteRespondentAnswersWithId($id)
    {
        $stmt = $this->dbh->prepare('DELETE FROM surveyResponses WHERE probe_id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $errorInDeletingRespondentAnswers = $stmt->errorInfo();
        if ($errorInDeletingRespondentAnswers[0] != '0') {
            throw new Exception('A problem is occurred during the deleting of the respondent answers. Error message: ' . $errorInDeletingRespondentAnswers[2]);
        }
    }
}

