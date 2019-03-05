<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/feed_item_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\FeedItemErrorEnum;

/**
 * Enum describing possible feed item errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.FeedItemErrorEnum.FeedItemError</code>
 */
class FeedItemError
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
     * Cannot convert the feed attribute value from string to its real type.
     *
     * Generated from protobuf enum <code>CANNOT_CONVERT_ATTRIBUTE_VALUE_FROM_STRING = 2;</code>
     */
    const CANNOT_CONVERT_ATTRIBUTE_VALUE_FROM_STRING = 2;
    /**
     * Cannot operate on removed feed item.
     *
     * Generated from protobuf enum <code>CANNOT_OPERATE_ON_REMOVED_FEED_ITEM = 3;</code>
     */
    const CANNOT_OPERATE_ON_REMOVED_FEED_ITEM = 3;
    /**
     * Date time zone does not match the account's time zone.
     *
     * Generated from protobuf enum <code>DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 4;</code>
     */
    const DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 4;
    /**
     * Feed item with the key attributes could not be found.
     *
     * Generated from protobuf enum <code>KEY_ATTRIBUTES_NOT_FOUND = 5;</code>
     */
    const KEY_ATTRIBUTES_NOT_FOUND = 5;
    /**
     * Url feed attribute value is not valid.
     *
     * Generated from protobuf enum <code>INVALID_URL = 6;</code>
     */
    const INVALID_URL = 6;
    /**
     * Some key attributes are missing.
     *
     * Generated from protobuf enum <code>MISSING_KEY_ATTRIBUTES = 7;</code>
     */
    const MISSING_KEY_ATTRIBUTES = 7;
    /**
     * Feed item has same key attributes as another feed item.
     *
     * Generated from protobuf enum <code>KEY_ATTRIBUTES_NOT_UNIQUE = 8;</code>
     */
    const KEY_ATTRIBUTES_NOT_UNIQUE = 8;
    /**
     * Cannot modify key attributes on an existing feed item.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_KEY_ATTRIBUTE_VALUE = 9;</code>
     */
    const CANNOT_MODIFY_KEY_ATTRIBUTE_VALUE = 9;
    /**
     * The feed attribute value is too large.
     *
     * Generated from protobuf enum <code>SIZE_TOO_LARGE_FOR_MULTI_VALUE_ATTRIBUTE = 10;</code>
     */
    const SIZE_TOO_LARGE_FOR_MULTI_VALUE_ATTRIBUTE = 10;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedItemError::class, \Google\Ads\GoogleAds\V1\Errors\FeedItemErrorEnum_FeedItemError::class);

