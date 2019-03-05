<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/field_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\FieldErrorEnum;

/**
 * Enum describing possible field errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.FieldErrorEnum.FieldError</code>
 */
class FieldError
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
     * The required field was not present in the resource.
     *
     * Generated from protobuf enum <code>REQUIRED = 2;</code>
     */
    const REQUIRED = 2;
    /**
     * The field attempted to be mutated is immutable.
     *
     * Generated from protobuf enum <code>IMMUTABLE_FIELD = 3;</code>
     */
    const IMMUTABLE_FIELD = 3;
    /**
     * The field's value is invalid.
     *
     * Generated from protobuf enum <code>INVALID_VALUE = 4;</code>
     */
    const INVALID_VALUE = 4;
    /**
     * The field cannot be set.
     *
     * Generated from protobuf enum <code>VALUE_MUST_BE_UNSET = 5;</code>
     */
    const VALUE_MUST_BE_UNSET = 5;
    /**
     * The required repeated field was empty.
     *
     * Generated from protobuf enum <code>REQUIRED_NONEMPTY_LIST = 6;</code>
     */
    const REQUIRED_NONEMPTY_LIST = 6;
    /**
     * The field cannot be cleared.
     *
     * Generated from protobuf enum <code>FIELD_CANNOT_BE_CLEARED = 7;</code>
     */
    const FIELD_CANNOT_BE_CLEARED = 7;
    /**
     * The field's value is on a blacklist for this field.
     *
     * Generated from protobuf enum <code>BLACKLISTED_VALUE = 8;</code>
     */
    const BLACKLISTED_VALUE = 8;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldError::class, \Google\Ads\GoogleAds\V1\Errors\FieldErrorEnum_FieldError::class);

