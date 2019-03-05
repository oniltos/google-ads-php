<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/device.proto

namespace Google\Ads\GoogleAds\V1\Enums\DeviceEnum;

/**
 * Enumerates Google Ads devices available for targeting.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.DeviceEnum.Device</code>
 */
class Device
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
     * Mobile devices with full browsers.
     *
     * Generated from protobuf enum <code>MOBILE = 2;</code>
     */
    const MOBILE = 2;
    /**
     * Tablets with full browsers.
     *
     * Generated from protobuf enum <code>TABLET = 3;</code>
     */
    const TABLET = 3;
    /**
     * Computers.
     *
     * Generated from protobuf enum <code>DESKTOP = 4;</code>
     */
    const DESKTOP = 4;
    /**
     * Other device types.
     *
     * Generated from protobuf enum <code>OTHER = 5;</code>
     */
    const OTHER = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Device::class, \Google\Ads\GoogleAds\V1\Enums\DeviceEnum_Device::class);

