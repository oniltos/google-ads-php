<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/header_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\HeaderErrorEnum;

/**
 * Enum describing possible header errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.HeaderErrorEnum.HeaderError</code>
 */
class HeaderError
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
     * The login customer id could not be validated.
     *
     * Generated from protobuf enum <code>INVALID_LOGIN_CUSTOMER_ID = 3;</code>
     */
    const INVALID_LOGIN_CUSTOMER_ID = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeaderError::class, \Google\Ads\GoogleAds\V1\Errors\HeaderErrorEnum_HeaderError::class);

