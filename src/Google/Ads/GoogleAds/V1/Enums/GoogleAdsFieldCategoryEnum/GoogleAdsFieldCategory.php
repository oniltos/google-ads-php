<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/google_ads_field_category.proto

namespace Google\Ads\GoogleAds\V1\Enums\GoogleAdsFieldCategoryEnum;

/**
 * The category of the artifact.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory</code>
 */
class GoogleAdsFieldCategory
{
    /**
     * Unspecified
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Unknown
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The described artifact is a resource.
     *
     * Generated from protobuf enum <code>RESOURCE = 2;</code>
     */
    const RESOURCE = 2;
    /**
     * The described artifact is a field and is an attribute of a resource.
     * Including a resource attribute field in a query may segment the query if
     * the resource to which it is attributed segments the resource found in
     * the FROM clause.
     *
     * Generated from protobuf enum <code>ATTRIBUTE = 3;</code>
     */
    const ATTRIBUTE = 3;
    /**
     * The described artifact is a field and always segments search queries.
     *
     * Generated from protobuf enum <code>SEGMENT = 5;</code>
     */
    const SEGMENT = 5;
    /**
     * The described artifact is a field and is a metric. It never segments
     * search queries.
     *
     * Generated from protobuf enum <code>METRIC = 6;</code>
     */
    const METRIC = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsFieldCategory::class, \Google\Ads\GoogleAds\V1\Enums\GoogleAdsFieldCategoryEnum_GoogleAdsFieldCategory::class);

