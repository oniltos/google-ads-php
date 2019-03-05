<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/geo_target_constant_suggestion_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\GeoTargetConstantSuggestionErrorEnum;

/**
 * Enum describing possible geo target constant suggestion errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.GeoTargetConstantSuggestionErrorEnum.GeoTargetConstantSuggestionError</code>
 */
class GeoTargetConstantSuggestionError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * A location name cannot be greater than 300 characters.
     *
     * Generated from protobuf enum <code>LOCATION_NAME_SIZE_LIMIT = 2;</code>
     */
    const LOCATION_NAME_SIZE_LIMIT = 2;
    /**
     * At most 25 location names can be specified in a SuggestGeoTargetConstants
     * method.
     *
     * Generated from protobuf enum <code>LOCATION_NAME_LIMIT = 3;</code>
     */
    const LOCATION_NAME_LIMIT = 3;
    /**
     * The country code is invalid.
     *
     * Generated from protobuf enum <code>INVALID_COUNTRY_CODE = 4;</code>
     */
    const INVALID_COUNTRY_CODE = 4;
    /**
     * Geo target constant resource names or location names must be provided in
     * the request.
     *
     * Generated from protobuf enum <code>REQUEST_PARAMETERS_UNSET = 5;</code>
     */
    const REQUEST_PARAMETERS_UNSET = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeoTargetConstantSuggestionError::class, \Google\Ads\GoogleAds\V1\Errors\GeoTargetConstantSuggestionErrorEnum_GeoTargetConstantSuggestionError::class);

