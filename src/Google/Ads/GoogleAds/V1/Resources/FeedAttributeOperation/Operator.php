<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/feed.proto

namespace Google\Ads\GoogleAds\V1\Resources\FeedAttributeOperation;

/**
 * The operator.
 *
 * Protobuf type <code>google.ads.googleads.v1.resources.FeedAttributeOperation.Operator</code>
 */
class Operator
{
    /**
     * Unspecified.
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
     * Add the attribute to the existing attributes.
     *
     * Generated from protobuf enum <code>ADD = 2;</code>
     */
    const ADD = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operator::class, \Google\Ads\GoogleAds\V1\Resources\FeedAttributeOperation_Operator::class);

