<?php

class SurveyResponses
{

    /* Properties declaration */
    protected $gender;
    protected $town;
    protected $postalCode;
    protected $age;
    protected $birthYear;
    protected $skinTone;
    protected $skinFeature;
    protected $hairType;
    protected $faceCosmeticsUse;
    protected $bodyCosmeticsUse;
    protected $hairCosmeticsUse;
    protected $handCosmeticsUse;
    protected $footCosmeticsUse;
    protected $beardCosmeticsUse;
    protected $purchaseLocation;
    protected $internetPurchaseLocation;
    protected $otherTownPurchaseLocation;
    protected $otherPurchaseLocation;
    protected $preferredUseMode;
    protected $otherPreferredUseMode;
    protected $needAdvice;
    protected $whyNeedAdvice;
    protected $skinProductsDifficulties;
    protected $hairProductsDifficulties;
    protected $whyProductsDifficulties;
    protected $otherWhyProductsDifficulties;
    protected $changeHairAppearance;
    protected $otherChangeHairAppearance;
    protected $placeChangeHairAppearance;
    protected $otherPlaceChangeHairAppearance;
    protected $skinPriceAndFrequencyUse;
    protected $hairPriceAndFrequencyUse;
    protected $cosmeticsPurchaseSatisfaction;
    protected $whyDissatisfactionCosmeticsUse;
    protected $hairCareWaiting;
    protected $otherHairCareWaiting;
    protected $bodyCareWaiting;
    protected $otherBodyCareWaiting;
    protected $packingInformation;
    protected $otherPackingInformation;
    protected $packagingType;
    protected $otherPackagingType;
    protected $homeMeeting;
    protected $friendMeeting;
    protected $whyRefuseMeeting;
    protected $hasChild;
    protected $ageCategory;
    protected $applyCosmeticsProducts;
    protected $whyNoApplyProducts;
    protected $frequencyFaceCosmeticsUse;
    protected $frequencyHairCosmeticsUse;
    protected $frequencyBodyCosmeticsUse;
    protected $productsLocation;
    protected $internetProductsLocation;
    protected $otherTownProductsLocation;
    protected $otherProductsLocation;
    protected $favouriteUseMode;
    protected $otherFavouriteUseMode;
    protected $hairFrequencyAndPriceUse;
    protected $skinFrequencyAndPriceUse;
    protected $childCosmeticsPurchaseSatisfaction;
    protected $whyDissatisfactionChildCosmeticsUse;
    protected $socialMediaUse;
    protected $otherSocialMediaUse;
    protected $joinPhone;
    protected $joinMail;
    protected $phoneNumber;
    protected $mailAddress;

    /* Constructor declaration */
    public function __construct($dataArray)
    {
        $this->gender = $dataArray['part1']['gender'];
        $this->town = $dataArray['part1']['town'];
        $this->postalCode = $dataArray['part1']['postalCode'];
        $this->age = $dataArray['part1']['age'];
        $this->birthYear = $dataArray['part1']['birthYear'];
        $this->skinTone = $dataArray['part1']['skinTone'];
        $this->skinFeature = $dataArray['part1']['skinFeature'];
        $this->hairType = $dataArray['part1']['hairType'];
        $this->faceCosmeticsUse = $dataArray['part1']['faceCosmeticsUse'];
        $this->bodyCosmeticsUse = $dataArray['part1']['bodyCosmeticsUse'];
        $this->hairCosmeticsUse = $dataArray['part1']['hairCosmeticsUse'];
        $this->handCosmeticsUse = $dataArray['part1']['handCosmeticsUse'];
        $this->footCosmeticsUse = $dataArray['part1']['footCosmeticsUse'];
        $this->beardCosmeticsUse = $dataArray['part1']['beardCosmeticsUse'];
        $this->purchaseLocation = $dataArray['part1']['purchaseLocation'];
        $this->internetPurchaseLocation = $dataArray['part1']['internetPurchaseLocation'];
        $this->otherTownPurchaseLocation = $dataArray['part1']['otherTownPurchaseLocation'];
        $this->otherPurchaseLocation = $dataArray['part1']['otherPurchaseLocation'];
        $this->preferredUseMode = $dataArray['part1']['preferredUseMode'];
        $this->otherPreferredUseMode = $dataArray['part1']['otherPreferredUseMode'];
        $this->needAdvice = $dataArray['part1']['needAdvice'];
        $this->whyNeedAdvice = $dataArray['part1']['whyNeedAdvice'];
        $this->skinProductsDifficulties = $dataArray['part1']['skinProductsDifficulties'];
        $this->hairProductsDifficulties = $dataArray['part1']['hairProductsDifficulties'];
        $this->whyProductsDifficulties = $dataArray['part1']['whyProductsDifficulties'];
        $this->otherWhyProductsDifficulties = $dataArray['part1']['otherWhyProductsDifficulties'];
        $this->changeHairAppearance = $dataArray['part1']['changeHairAppearance'];
        $this->otherChangeHairAppearance = $dataArray['part1']['otherChangeHairAppearance'];
        $this->placeChangeHairAppearance = $dataArray['part1']['placeChangeHairAppearance'];
        $this->otherPlaceChangeHairAppearance = $dataArray['part1']['otherPlaceChangeHairAppearance'];
        $this->skinPriceAndFrequencyUse = $dataArray['part1']['skinPriceAndFrequencyUse'];
        $this->hairPriceAndFrequencyUse = $dataArray['part1']['hairPriceAndFrequencyUse'];
        $this->cosmeticsPurchaseSatisfaction = $dataArray['part1']['cosmeticsPurchaseSatisfaction'];
        $this->whyDissatisfactionCosmeticsUse = $dataArray['part1']['whyDissatisfactionCosmeticsUse'];
        $this->hairCareWaiting = $dataArray['part2']['hairCareWaiting'];
        $this->otherHairCareWaiting = $dataArray['part2']['otherHairCareWaiting'];
        $this->bodyCareWaiting = $dataArray['part2']['bodyCareWaiting'];
        $this->otherBodyCareWaiting = $dataArray['part2']['otherBodyCareWaiting'];
        $this->packingInformation = $dataArray['part2']['packingInformation'];
        $this->otherPackingInformation = $dataArray['part2']['otherPackingInformation'];
        $this->packagingType = $dataArray['part2']['packagingType'];
        $this->otherPackagingType = $dataArray['part2']['otherPackagingType'];
        $this->homeMeeting = $dataArray['part2']['homeMeeting'];
        $this->friendMeeting = $dataArray['part2']['friendMeeting'];
        $this->whyRefuseMeeting = $dataArray['part2']['whyRefuseMeeting'];
        $this->hasChild = $dataArray['part3']['hasChild'];
        $this->ageCategory = $dataArray['part3']['ageCategory'];
        $this->applyCosmeticsProducts = $dataArray['part3']['applyCosmeticsProducts'];
        $this->whyNoApplyProducts = $dataArray['part3']['whyNoApplyProducts'];
        $this->frequencyFaceCosmeticsUse = $dataArray['part3']['frequencyFaceCosmeticUse'];
        $this->frequencyHairCosmeticsUse = $dataArray['part3']['frequencyHairCosmeticUse'];
        $this->frequencyBodyCosmeticsUse = $dataArray['part3']['frequencyBodyCosmeticUse'];
        $this->productsLocation = $dataArray['part3']['productLocation'];
        $this->internetProductsLocation = $dataArray['part3']['internetProductLocation'];
        $this->otherTownProductsLocation = $dataArray['part3']['otherTownProductLocation'];
        $this->otherProductsLocation = $dataArray['part3']['otherProductLocation'];
        $this->favouriteUseMode = $dataArray['part3']['favouriteUseMode'];
        $this->otherFavouriteUseMode = $dataArray['part3']['otherFavouriteUseMode'];
        $this->hairFrequencyAndPriceUse = $dataArray['part3']['hairPriceAndFrequencyUse'];
        $this->skinFrequencyAndPriceUse = $dataArray['part3']['skinPriceAndFrequencyUse'];
        $this->childCosmeticsPurchaseSatisfaction = $dataArray['part3']['childCosmeticsPurchaseSatisfaction'];
        $this->whyDissatisfactionChildCosmeticsUse = $dataArray['part3']['whyDissatisfactionChildCosmeticsUse'];
        $this->socialMediaUse = $dataArray['part4']['socialMediaUse'];
        $this->otherSocialMediaUse = $dataArray['part4']['otherSocialMediaUse'];
        $this->joinPhone = $dataArray['part4']['joinPhone'];
        $this->joinMail = $dataArray['part4']['joinMail'];
        $this->phoneNumber = $dataArray['part4']['phoneNumber'];
        $this->mailAddress = $dataArray['part4']['mailAddress'];
    }

    /* Declaration of all getters */
    public function getGender()
    {
        return $this->gender;
    }

    public function getTown()
    {
        return $this->town;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getBirthYear()
    {
        return $this->birthYear;
    }

    public function getSkinTone()
    {
        return $this->skinTone;
    }

    public function getSkinFeature()
    {
        return $this->skinFeature;
    }

    public function getHairType()
    {
        return $this->hairType;
    }

    public function getFaceCosmeticsUse()
    {
        return $this->faceCosmeticsUse;
    }

    public function getBodyCosmeticsUse()
    {
        return $this->bodyCosmeticsUse;
    }

    public function getHairCosmeticsUse()
    {
        return $this->hairCosmeticsUse;
    }

    public function getHandCosmeticsUse()
    {
        return $this->handCosmeticsUse;
    }

    public function getFootCosmeticsUse()
    {
        return $this->footCosmeticsUse;
    }

    public function getBeardCosmeticsUse()
    {
        return $this->beardCosmeticsUse;
    }

    public function getPurchaseLocation()
    {
        return $this->purchaseLocation;
    }

    public function getInternetPurchaseLocation()
    {
        return $this->internetPurchaseLocation;
    }

    public function getOtherTownPurchaseLocation()
    {
        return $this->otherTownPurchaseLocation;
    }

    public function getOtherPurchaseLocation()
    {
        return $this->otherPurchaseLocation;
    }

    public function getPreferredUseMode()
    {
        return $this->preferredUseMode;
    }

    public function getOtherPreferredUseMode()
    {
        return $this->otherPreferredUseMode;
    }

    public function getNeedAdvice()
    {
        return $this->needAdvice;
    }

    public function getWhyNeedAdvice()
    {
        return $this->whyNeedAdvice;
    }

    public function getSkinProductsDifficulties()
    {
        return $this->skinProductsDifficulties;
    }

    public function getHairProductsDifficulties()
    {
        return $this->hairProductsDifficulties;
    }

    public function getWhyProductsDifficulties()
    {
        return $this->whyProductsDifficulties;
    }

    public function getOtherWhyProductsDifficulties()
    {
        return $this->otherWhyProductsDifficulties;
    }

    public function getChangeHairAppearance()
    {
        return $this->changeHairAppearance;
    }

    public function getOtherChangeHairAppearance()
    {
        return $this->otherChangeHairAppearance;
    }

    public function getPlaceChangeHairAppearance()
    {
        return $this->placeChangeHairAppearance;
    }

    public function getOtherPlaceChangeHairAppearance()
    {
        return $this->otherPlaceChangeHairAppearance;
    }

    public function getSkinPriceAndFrequencyUse()
    {
        return $this->skinPriceAndFrequencyUse;
    }

    public function getHairPriceAndFrequencyUse()
    {
        return $this->hairPriceAndFrequencyUse;
    }

    public function getCosmeticsPurchaseSatisfaction()
    {
        return $this->cosmeticsPurchaseSatisfaction;
    }

    public function getWhyDissatisfactionCosmeticsUse()
    {
        return $this->whyDissatisfactionCosmeticsUse;
    }

    public function getHairCareWaiting()
    {
        return $this->hairCareWaiting;
    }

    public function getOtherHairCareWaiting()
    {
        return $this->otherHairCareWaiting;
    }

    public function getBodyCareWaiting()
    {
        return $this->bodyCareWaiting;
    }

    public function getOtherBodyCareWaiting()
    {
        return $this->otherBodyCareWaiting;
    }

    public function getPackingInformation()
    {
        return $this->packingInformation;
    }

    public function getOtherPackingInformation()
    {
        return $this->otherPackingInformation;
    }

    public function getPackagingType()
    {
        return $this->packagingType;
    }

    public function getOtherPackagingType()
    {
        return $this->otherPackagingType;
    }

    public function getHomeMeeting()
    {
        return $this->homeMeeting;
    }

    public function getFriendMeeting()
    {
        return $this->friendMeeting;
    }

    public function getWhyRefuseMeeting()
    {
        return $this->whyRefuseMeeting;
    }

    public function getHasChild()
    {
        return $this->hasChild;
    }

    public function getAgeCategory()
    {
        return $this->ageCategory;
    }

    public function getApplyCosmeticsProducts()
    {
        return $this->applyCosmeticsProducts;
    }

    public function getWhyNoApplyProducts()
    {
        return $this->whyNoApplyProducts;
    }

    public function getFrequencyFaceCosmeticsUse()
    {
        return $this->frequencyFaceCosmeticsUse;
    }

    public function getFrequencyHairCosmeticsUse()
    {
        return $this->frequencyHairCosmeticsUse;
    }

    public function getFrequencyBodyCosmeticsUse()
    {
        return $this->frequencyBodyCosmeticsUse;
    }

    public function getProductsLocation()
    {
        return $this->productsLocation;
    }

    public function getInternetProductsLocation()
    {
        return $this->internetProductsLocation;
    }

    public function getOtherTownProductsLocation()
    {
        return $this->otherTownProductsLocation;
    }

    public function getOtherProductsLocation()
    {
        return $this->otherProductsLocation;
    }

    public function getFavouriteUseMode()
    {
        return $this->favouriteUseMode;
    }

    public function getOtherFavouriteUseMode()
    {
        return $this->otherFavouriteUseMode;
    }

    public function getHairFrequencyAndPriceUse()
    {
        return $this->hairFrequencyAndPriceUse;
    }

    public function getSkinFrequencyAndPriceUse()
    {
        return $this->skinFrequencyAndPriceUse;
    }

    public function getChildCosmeticsPurchaseSatisfaction()
    {
        return $this->childCosmeticsPurchaseSatisfaction;
    }

    public function getWhyDissatisfactionChildCosmeticsUse()
    {
        return $this->whyDissatisfactionChildCosmeticsUse;
    }

    public function getSocialMediaUse()
    {
        return $this->socialMediaUse;
    }

    public function getOtherSocialMediaUse()
    {
        return $this->otherSocialMediaUse;
    }

    public function getJoinPhone()
    {
        return $this->joinPhone;
    }

    public function getJoinMail()
    {
        return $this->joinMail;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getMailAddress()
    {
        return $this->mailAddress;
    }
}

