<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/negative_geo_target_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\NegativeGeoTargetTypeEnum;

/**
 * The possible negative geo target types.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.NegativeGeoTargetTypeEnum.NegativeGeoTargetType</code>
 */
class NegativeGeoTargetType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Specifies that a user is excluded from seeing the ad if either their
     * Area of Interest (AOI) or their Location of Presence (LOP) matches the
     * geo target.
     *
     * Generated from protobuf enum <code>DONT_CARE = 2;</code>
     */
    const DONT_CARE = 2;
    /**
     * Specifies that a user is excluded from seeing the ad
     * only if their Location of Presence (LOP) matches the geo target.
     *
     * Generated from protobuf enum <code>LOCATION_OF_PRESENCE = 3;</code>
     */
    const LOCATION_OF_PRESENCE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NegativeGeoTargetType::class, \Google\Ads\GoogleAds\V1\Enums\NegativeGeoTargetTypeEnum_NegativeGeoTargetType::class);

