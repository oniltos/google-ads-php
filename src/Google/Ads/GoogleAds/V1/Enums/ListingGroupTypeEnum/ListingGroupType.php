<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/listing_group_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\ListingGroupTypeEnum;

/**
 * The type of the listing group.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ListingGroupTypeEnum.ListingGroupType</code>
 */
class ListingGroupType
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
     * Subdivision of products along some listing dimension. These nodes
     * are not used by serving to target listing entries, but is purely
     * to define the structure of the tree.
     *
     * Generated from protobuf enum <code>SUBDIVISION = 2;</code>
     */
    const SUBDIVISION = 2;
    /**
     * Listing group unit that defines a bid.
     *
     * Generated from protobuf enum <code>UNIT = 3;</code>
     */
    const UNIT = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListingGroupType::class, \Google\Ads\GoogleAds\V1\Enums\ListingGroupTypeEnum_ListingGroupType::class);

