<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/local_placeholder_field.proto

namespace Google\Ads\GoogleAds\V1\Enums\LocalPlaceholderFieldEnum;

/**
 * Possible values for Local placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.LocalPlaceholderFieldEnum.LocalPlaceholderField</code>
 */
class LocalPlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: STRING. Required. Unique ID.
     *
     * Generated from protobuf enum <code>DEAL_ID = 2;</code>
     */
    const DEAL_ID = 2;
    /**
     * Data Type: STRING. Required. Main headline with local deal title to be
     * shown in dynamic ad.
     *
     * Generated from protobuf enum <code>DEAL_NAME = 3;</code>
     */
    const DEAL_NAME = 3;
    /**
     * Data Type: STRING. Local deal subtitle to be shown in dynamic ad.
     *
     * Generated from protobuf enum <code>SUBTITLE = 4;</code>
     */
    const SUBTITLE = 4;
    /**
     * Data Type: STRING. Description of local deal to be shown in dynamic ad.
     *
     * Generated from protobuf enum <code>DESCRIPTION = 5;</code>
     */
    const DESCRIPTION = 5;
    /**
     * Data Type: STRING. Price to be shown in the ad. Highly recommended for
     * dynamic ads. Example: "100.00 USD"
     *
     * Generated from protobuf enum <code>PRICE = 6;</code>
     */
    const PRICE = 6;
    /**
     * Data Type: STRING. Formatted price to be shown in the ad.
     * Example: "Starting at $100.00 USD", "$80 - $100"
     *
     * Generated from protobuf enum <code>FORMATTED_PRICE = 7;</code>
     */
    const FORMATTED_PRICE = 7;
    /**
     * Data Type: STRING. Sale price to be shown in the ad.
     * Example: "80.00 USD"
     *
     * Generated from protobuf enum <code>SALE_PRICE = 8;</code>
     */
    const SALE_PRICE = 8;
    /**
     * Data Type: STRING. Formatted sale price to be shown in the ad.
     * Example: "On sale for $80.00", "$60 - $80"
     *
     * Generated from protobuf enum <code>FORMATTED_SALE_PRICE = 9;</code>
     */
    const FORMATTED_SALE_PRICE = 9;
    /**
     * Data Type: URL. Image to be displayed in the ad.
     *
     * Generated from protobuf enum <code>IMAGE_URL = 10;</code>
     */
    const IMAGE_URL = 10;
    /**
     * Data Type: STRING. Complete property address, including postal code.
     *
     * Generated from protobuf enum <code>ADDRESS = 11;</code>
     */
    const ADDRESS = 11;
    /**
     * Data Type: STRING. Category of local deal used to group like items
     * together for recommendation engine.
     *
     * Generated from protobuf enum <code>CATEGORY = 12;</code>
     */
    const CATEGORY = 12;
    /**
     * Data Type: STRING_LIST. Keywords used for product retrieval.
     *
     * Generated from protobuf enum <code>CONTEXTUAL_KEYWORDS = 13;</code>
     */
    const CONTEXTUAL_KEYWORDS = 13;
    /**
     * Data Type: URL_LIST. Required. Final URLs to be used in ad when using
     * Upgraded URLs; the more specific the better (e.g. the individual URL of a
     * specific local deal and its location).
     *
     * Generated from protobuf enum <code>FINAL_URLS = 14;</code>
     */
    const FINAL_URLS = 14;
    /**
     * Data Type: URL_LIST. Final mobile URLs for the ad when using Upgraded
     * URLs.
     *
     * Generated from protobuf enum <code>FINAL_MOBILE_URLS = 15;</code>
     */
    const FINAL_MOBILE_URLS = 15;
    /**
     * Data Type: URL. Tracking template for the ad when using Upgraded URLs.
     *
     * Generated from protobuf enum <code>TRACKING_URL = 16;</code>
     */
    const TRACKING_URL = 16;
    /**
     * Data Type: STRING. Android app link. Must be formatted as:
     * android-app://{package_id}/{scheme}/{host_path}.
     * The components are defined as follows:
     * package_id: app ID as specified in Google Play.
     * scheme: the scheme to pass to the application. Can be HTTP, or a custom
     *   scheme.
     * host_path: identifies the specific content within your application.
     *
     * Generated from protobuf enum <code>ANDROID_APP_LINK = 17;</code>
     */
    const ANDROID_APP_LINK = 17;
    /**
     * Data Type: STRING_LIST. List of recommended local deal IDs to show
     * together with this item.
     *
     * Generated from protobuf enum <code>SIMILAR_DEAL_IDS = 18;</code>
     */
    const SIMILAR_DEAL_IDS = 18;
    /**
     * Data Type: STRING. iOS app link.
     *
     * Generated from protobuf enum <code>IOS_APP_LINK = 19;</code>
     */
    const IOS_APP_LINK = 19;
    /**
     * Data Type: INT64. iOS app store ID.
     *
     * Generated from protobuf enum <code>IOS_APP_STORE_ID = 20;</code>
     */
    const IOS_APP_STORE_ID = 20;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocalPlaceholderField::class, \Google\Ads\GoogleAds\V1\Enums\LocalPlaceholderFieldEnum_LocalPlaceholderField::class);

