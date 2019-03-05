<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/external_conversion_source.proto

namespace Google\Ads\GoogleAds\V1\Enums\ExternalConversionSourceEnum;

/**
 * The external conversion source that is associated with a ConversionAction.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ExternalConversionSourceEnum.ExternalConversionSource</code>
 */
class ExternalConversionSource
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Conversion that occurs when a user navigates to a particular webpage
     * after viewing an ad; Displayed in Google Ads UI as 'Website'.
     *
     * Generated from protobuf enum <code>WEBPAGE = 2;</code>
     */
    const WEBPAGE = 2;
    /**
     * Conversion that comes from linked Google Analytics goal or transaction;
     * Displayed in Google Ads UI as 'Analytics'.
     *
     * Generated from protobuf enum <code>ANALYTICS = 3;</code>
     */
    const ANALYTICS = 3;
    /**
     * Website conversion that is uploaded through ConversionUploadService;
     * Displayed in Google Ads UI as 'Import from clicks'.
     *
     * Generated from protobuf enum <code>UPLOAD = 4;</code>
     */
    const UPLOAD = 4;
    /**
     * Conversion that occurs when a user clicks on a call extension directly on
     * an ad; Displayed in Google Ads UI as 'Calls from ads'.
     *
     * Generated from protobuf enum <code>AD_CALL_METRICS = 5;</code>
     */
    const AD_CALL_METRICS = 5;
    /**
     * Conversion that occurs when a user calls a dynamically-generated phone
     * number (by installed javascript) from an advertiser's website after
     * clicking on an ad; Displayed in Google Ads UI as 'Calls from website'.
     *
     * Generated from protobuf enum <code>WEBSITE_CALL_METRICS = 6;</code>
     */
    const WEBSITE_CALL_METRICS = 6;
    /**
     * Conversion that occurs when a user visits an advertiser's retail store
     * after clicking on a Google ad;
     * Displayed in Google Ads UI as 'Store visits'.
     *
     * Generated from protobuf enum <code>STORE_VISITS = 7;</code>
     */
    const STORE_VISITS = 7;
    /**
     * Conversion that occurs when a user takes an in-app action such as a
     * purchase in an Android app;
     * Displayed in Google Ads UI as 'Android in-app action'.
     *
     * Generated from protobuf enum <code>ANDROID_IN_APP = 8;</code>
     */
    const ANDROID_IN_APP = 8;
    /**
     * Conversion that occurs when a user takes an in-app action such as a
     * purchase in an iOS app;
     * Displayed in Google Ads UI as 'iOS in-app action'.
     *
     * Generated from protobuf enum <code>IOS_IN_APP = 9;</code>
     */
    const IOS_IN_APP = 9;
    /**
     * Conversion that occurs when a user opens an iOS app for the first time;
     * Displayed in Google Ads UI as 'iOS app install (first open)'.
     *
     * Generated from protobuf enum <code>IOS_FIRST_OPEN = 10;</code>
     */
    const IOS_FIRST_OPEN = 10;
    /**
     * Legacy app conversions that do not have an AppPlatform provided;
     * Displayed in Google Ads UI as 'Mobile app'.
     *
     * Generated from protobuf enum <code>APP_UNSPECIFIED = 11;</code>
     */
    const APP_UNSPECIFIED = 11;
    /**
     * Conversion that occurs when a user opens an Android app for the first
     * time; Displayed in Google Ads UI as 'Android app install (first open)'.
     *
     * Generated from protobuf enum <code>ANDROID_FIRST_OPEN = 12;</code>
     */
    const ANDROID_FIRST_OPEN = 12;
    /**
     * Call conversion that is uploaded through ConversionUploadService;
     * Displayed in Google Ads UI as 'Import from calls'.
     *
     * Generated from protobuf enum <code>UPLOAD_CALLS = 13;</code>
     */
    const UPLOAD_CALLS = 13;
    /**
     * Conversion that comes from a linked Firebase event;
     * Displayed in Google Ads UI as 'Firebase'.
     *
     * Generated from protobuf enum <code>FIREBASE = 14;</code>
     */
    const FIREBASE = 14;
    /**
     * Conversion that occurs when a user clicks on a mobile phone number;
     * Displayed in Google Ads UI as 'Phone number clicks'.
     *
     * Generated from protobuf enum <code>CLICK_TO_CALL = 15;</code>
     */
    const CLICK_TO_CALL = 15;
    /**
     * Conversion that comes from Salesforce;
     * Displayed in Google Ads UI as 'Salesforce.com'.
     *
     * Generated from protobuf enum <code>SALESFORCE = 16;</code>
     */
    const SALESFORCE = 16;
    /**
     * Conversion that comes from in-store purchases recorded by CRM;
     * Displayed in Google Ads UI as 'Store sales (data partner)'.
     *
     * Generated from protobuf enum <code>STORE_SALES_CRM = 17;</code>
     */
    const STORE_SALES_CRM = 17;
    /**
     * Conversion that comes from in-store purchases from payment network;
     * Displayed in Google Ads UI as 'Store sales (payment network)'.
     *
     * Generated from protobuf enum <code>STORE_SALES_PAYMENT_NETWORK = 18;</code>
     */
    const STORE_SALES_PAYMENT_NETWORK = 18;
    /**
     * Codeless Google Play conversion;
     * Displayed in Google Ads UI as 'Google Play'.
     *
     * Generated from protobuf enum <code>GOOGLE_PLAY = 19;</code>
     */
    const GOOGLE_PLAY = 19;
    /**
     * Conversion that comes from a linked third-party app analytics event;
     * Displayed in Google Ads UI as 'Third-party app analytics'.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_APP_ANALYTICS = 20;</code>
     */
    const THIRD_PARTY_APP_ANALYTICS = 20;
    /**
     * Conversion that is controlled by Google Attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_ATTRIBUTION = 21;</code>
     */
    const GOOGLE_ATTRIBUTION = 21;
    /**
     * Store Sales conversion based on first-party or third-party merchant data
     * uploads. Displayed in Google Ads UI as 'Store sales (direct)'.
     *
     * Generated from protobuf enum <code>STORE_SALES_DIRECT = 22;</code>
     */
    const STORE_SALES_DIRECT = 22;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExternalConversionSource::class, \Google\Ads\GoogleAds\V1\Enums\ExternalConversionSourceEnum_ExternalConversionSource::class);

