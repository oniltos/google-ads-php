<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/tracking_code_page_format.proto

namespace Google\Ads\GoogleAds\V1\Enums\TrackingCodePageFormatEnum;

/**
 * The format of the web page where the tracking tag and snippet will be
 * installed.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.TrackingCodePageFormatEnum.TrackingCodePageFormat</code>
 */
class TrackingCodePageFormat
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
     * Standard HTML page format.
     *
     * Generated from protobuf enum <code>HTML = 2;</code>
     */
    const HTML = 2;
    /**
     * Google AMP page format.
     *
     * Generated from protobuf enum <code>AMP = 3;</code>
     */
    const AMP = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TrackingCodePageFormat::class, \Google\Ads\GoogleAds\V1\Enums\TrackingCodePageFormatEnum_TrackingCodePageFormat::class);

