<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/geo_target_constant.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geo target constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.GeoTargetConstant</code>
 */
class GeoTargetConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * Geo target constant English name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     */
    private $name = null;
    /**
     * The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 5;</code>
     */
    private $country_code = null;
    /**
     * Geo target constant target type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_type = 6;</code>
     */
    private $target_type = null;
    /**
     * Geo target constant status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatus status = 7;</code>
     */
    private $status = 0;
    /**
     * The fully qualified English name, consisting of the target's name and that
     * of its parent and country.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue canonical_name = 8;</code>
     */
    private $canonical_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the geo target constant.
     *           Geo target constant resource names have the form:
     *           `geoTargetConstants/{geo_target_constant_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the geo target constant.
     *     @type \Google\Protobuf\StringValue $name
     *           Geo target constant English name.
     *     @type \Google\Protobuf\StringValue $country_code
     *           The ISO-3166-1 alpha-2 country code that is associated with the target.
     *     @type \Google\Protobuf\StringValue $target_type
     *           Geo target constant target type.
     *     @type int $status
     *           Geo target constant status.
     *     @type \Google\Protobuf\StringValue $canonical_name
     *           The fully qualified English name, consisting of the target's name and that
     *           of its parent and country.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\GeoTargetConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Geo target constant English name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Geo target constant English name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 5;</code>
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
     * Geo target constant target type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_type = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetType()
    {
        return $this->target_type;
    }

    /**
     * Geo target constant target type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_type = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetType($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->target_type = $var;

        return $this;
    }

    /**
     * Geo target constant status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatus status = 7;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Geo target constant status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatus status = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\GeoTargetConstantStatusEnum_GeoTargetConstantStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The fully qualified English name, consisting of the target's name and that
     * of its parent and country.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue canonical_name = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCanonicalName()
    {
        return $this->canonical_name;
    }

    /**
     * The fully qualified English name, consisting of the target's name and that
     * of its parent and country.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue canonical_name = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCanonicalName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->canonical_name = $var;

        return $this;
    }

}

