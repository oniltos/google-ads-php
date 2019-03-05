<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/extensions.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Call extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.CallFeedItem</code>
 */
class CallFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The advertiser's phone number to append to the ad.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 1;</code>
     */
    private $phone_number = null;
    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     */
    private $country_code = null;
    /**
     * Indicates whether call tracking is enabled. By default, call tracking is
     * not enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_tracking_enabled = 3;</code>
     */
    private $call_tracking_enabled = null;
    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * call_tracking_enabled is set to true. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_conversion_action = 4;</code>
     */
    private $call_conversion_action = null;
    /**
     * If true, disable call conversion tracking. call_conversion_action should
     * not be set if this is true. Optional.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_conversion_tracking_disabled = 5;</code>
     */
    private $call_conversion_tracking_disabled = null;
    /**
     * Enum value that indicates whether this call extension uses its own call
     * conversion setting (or just have call conversion disabled), or following
     * the account level setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 6;</code>
     */
    private $call_conversion_reporting_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $phone_number
     *           The advertiser's phone number to append to the ad.
     *           This string must not be empty.
     *     @type \Google\Protobuf\StringValue $country_code
     *           Uppercase two-letter country code of the advertiser's phone number.
     *           This string must not be empty.
     *     @type \Google\Protobuf\BoolValue $call_tracking_enabled
     *           Indicates whether call tracking is enabled. By default, call tracking is
     *           not enabled.
     *     @type \Google\Protobuf\StringValue $call_conversion_action
     *           The conversion action to attribute a call conversion to. If not set a
     *           default conversion action is used. This field only has effect if
     *           call_tracking_enabled is set to true. Otherwise this field is ignored.
     *     @type \Google\Protobuf\BoolValue $call_conversion_tracking_disabled
     *           If true, disable call conversion tracking. call_conversion_action should
     *           not be set if this is true. Optional.
     *     @type int $call_conversion_reporting_state
     *           Enum value that indicates whether this call extension uses its own call
     *           conversion setting (or just have call conversion disabled), or following
     *           the account level setting.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The advertiser's phone number to append to the ad.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * The advertiser's phone number to append to the ad.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Indicates whether call tracking is enabled. By default, call tracking is
     * not enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_tracking_enabled = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getCallTrackingEnabled()
    {
        return $this->call_tracking_enabled;
    }

    /**
     * Indicates whether call tracking is enabled. By default, call tracking is
     * not enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_tracking_enabled = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setCallTrackingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->call_tracking_enabled = $var;

        return $this;
    }

    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * call_tracking_enabled is set to true. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_conversion_action = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCallConversionAction()
    {
        return $this->call_conversion_action;
    }

    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * call_tracking_enabled is set to true. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_conversion_action = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCallConversionAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->call_conversion_action = $var;

        return $this;
    }

    /**
     * If true, disable call conversion tracking. call_conversion_action should
     * not be set if this is true. Optional.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_conversion_tracking_disabled = 5;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getCallConversionTrackingDisabled()
    {
        return $this->call_conversion_tracking_disabled;
    }

    /**
     * If true, disable call conversion tracking. call_conversion_action should
     * not be set if this is true. Optional.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_conversion_tracking_disabled = 5;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setCallConversionTrackingDisabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->call_conversion_tracking_disabled = $var;

        return $this;
    }

    /**
     * Enum value that indicates whether this call extension uses its own call
     * conversion setting (or just have call conversion disabled), or following
     * the account level setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 6;</code>
     * @return int
     */
    public function getCallConversionReportingState()
    {
        return $this->call_conversion_reporting_state;
    }

    /**
     * Enum value that indicates whether this call extension uses its own call
     * conversion setting (or just have call conversion disabled), or following
     * the account level setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCallConversionReportingState($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\CallConversionReportingStateEnum_CallConversionReportingState::class);
        $this->call_conversion_reporting_state = $var;

        return $this;
    }

}

