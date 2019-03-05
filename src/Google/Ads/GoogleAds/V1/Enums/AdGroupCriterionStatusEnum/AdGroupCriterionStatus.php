<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/ad_group_criterion_status.proto

namespace Google\Ads\GoogleAds\V1\Enums\AdGroupCriterionStatusEnum;

/**
 * The possible statuses of an AdGroupCriterion.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.AdGroupCriterionStatusEnum.AdGroupCriterionStatus</code>
 */
class AdGroupCriterionStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The ad group criterion is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * The ad group criterion is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 3;</code>
     */
    const PAUSED = 3;
    /**
     * The ad group criterion is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    const REMOVED = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdGroupCriterionStatus::class, \Google\Ads\GoogleAds\V1\Enums\AdGroupCriterionStatusEnum_AdGroupCriterionStatus::class);

