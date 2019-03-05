<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/feed_item.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed item attribute value.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.FeedItemAttributeValue</code>
 */
class FeedItemAttributeValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Id of the feed attribute for which the value is associated with.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_attribute_id = 1;</code>
     */
    private $feed_attribute_id = null;
    /**
     * Int64 value. Should be set if feed_attribute_id refers to a feed attribute
     * of type INT64.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value integer_value = 2;</code>
     */
    private $integer_value = null;
    /**
     * Bool value. Should be set if feed_attribute_id refers to a feed attribute
     * of type BOOLEAN.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue boolean_value = 3;</code>
     */
    private $boolean_value = null;
    /**
     * String value. Should be set if feed_attribute_id refers to a feed attribute
     * of type STRING, URL or DATE_TIME.
     * For STRING the maximum length is 1500 characters. For URL the maximum
     * length is 2076 characters. For DATE_TIME the format of the string must
     * be the same as start and end time for the feed item.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue string_value = 4;</code>
     */
    private $string_value = null;
    /**
     * Double value. Should be set if feed_attribute_id refers to a feed attribute
     * of type DOUBLE.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue double_value = 5;</code>
     */
    private $double_value = null;
    /**
     * Price value. Should be set if feed_attribute_id refers to a feed attribute
     * of type PRICE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.Money price_value = 6;</code>
     */
    private $price_value = null;
    /**
     * Repeated int64 value. Should be set if feed_attribute_id refers to a feed
     * attribute of type INT64_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value integer_values = 7;</code>
     */
    private $integer_values;
    /**
     * Repeated bool value. Should be set if feed_attribute_id refers to a feed
     * attribute of type BOOLEAN_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.BoolValue boolean_values = 8;</code>
     */
    private $boolean_values;
    /**
     * Repeated string value. Should be set if feed_attribute_id refers to a feed
     * attribute of type STRING_LIST, URL_LIST or DATE_TIME_LIST.
     * For STRING_LIST and URL_LIST the total size of the list in bytes may not
     * exceed 3000. For DATE_TIME_LIST the number of elements may not exceed 200.
     * For STRING_LIST the maximum length of each string element is 1500
     * characters. For URL_LIST the maximum length is 2076 characters. For
     * DATE_TIME the format of the string must be the same as start and end time
     * for the feed item.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue string_values = 9;</code>
     */
    private $string_values;
    /**
     * Repeated double value. Should be set if feed_attribute_id refers to a feed
     * attribute of type DOUBLE_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.DoubleValue double_values = 10;</code>
     */
    private $double_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $feed_attribute_id
     *           Id of the feed attribute for which the value is associated with.
     *     @type \Google\Protobuf\Int64Value $integer_value
     *           Int64 value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type INT64.
     *     @type \Google\Protobuf\BoolValue $boolean_value
     *           Bool value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type BOOLEAN.
     *     @type \Google\Protobuf\StringValue $string_value
     *           String value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type STRING, URL or DATE_TIME.
     *           For STRING the maximum length is 1500 characters. For URL the maximum
     *           length is 2076 characters. For DATE_TIME the format of the string must
     *           be the same as start and end time for the feed item.
     *     @type \Google\Protobuf\DoubleValue $double_value
     *           Double value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type DOUBLE.
     *     @type \Google\Ads\GoogleAds\V1\Common\Money $price_value
     *           Price value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type PRICE.
     *     @type \Google\Protobuf\Int64Value[]|\Google\Protobuf\Internal\RepeatedField $integer_values
     *           Repeated int64 value. Should be set if feed_attribute_id refers to a feed
     *           attribute of type INT64_LIST.
     *     @type \Google\Protobuf\BoolValue[]|\Google\Protobuf\Internal\RepeatedField $boolean_values
     *           Repeated bool value. Should be set if feed_attribute_id refers to a feed
     *           attribute of type BOOLEAN_LIST.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $string_values
     *           Repeated string value. Should be set if feed_attribute_id refers to a feed
     *           attribute of type STRING_LIST, URL_LIST or DATE_TIME_LIST.
     *           For STRING_LIST and URL_LIST the total size of the list in bytes may not
     *           exceed 3000. For DATE_TIME_LIST the number of elements may not exceed 200.
     *           For STRING_LIST the maximum length of each string element is 1500
     *           characters. For URL_LIST the maximum length is 2076 characters. For
     *           DATE_TIME the format of the string must be the same as start and end time
     *           for the feed item.
     *     @type \Google\Protobuf\DoubleValue[]|\Google\Protobuf\Internal\RepeatedField $double_values
     *           Repeated double value. Should be set if feed_attribute_id refers to a feed
     *           attribute of type DOUBLE_LIST.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\FeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Id of the feed attribute for which the value is associated with.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_attribute_id = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getFeedAttributeId()
    {
        return $this->feed_attribute_id;
    }

    /**
     * Id of the feed attribute for which the value is associated with.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_attribute_id = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setFeedAttributeId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->feed_attribute_id = $var;

        return $this;
    }

    /**
     * Int64 value. Should be set if feed_attribute_id refers to a feed attribute
     * of type INT64.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value integer_value = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getIntegerValue()
    {
        return $this->integer_value;
    }

    /**
     * Int64 value. Should be set if feed_attribute_id refers to a feed attribute
     * of type INT64.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value integer_value = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setIntegerValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->integer_value = $var;

        return $this;
    }

    /**
     * Bool value. Should be set if feed_attribute_id refers to a feed attribute
     * of type BOOLEAN.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue boolean_value = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getBooleanValue()
    {
        return $this->boolean_value;
    }

    /**
     * Bool value. Should be set if feed_attribute_id refers to a feed attribute
     * of type BOOLEAN.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue boolean_value = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setBooleanValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->boolean_value = $var;

        return $this;
    }

    /**
     * String value. Should be set if feed_attribute_id refers to a feed attribute
     * of type STRING, URL or DATE_TIME.
     * For STRING the maximum length is 1500 characters. For URL the maximum
     * length is 2076 characters. For DATE_TIME the format of the string must
     * be the same as start and end time for the feed item.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue string_value = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStringValue()
    {
        return $this->string_value;
    }

    /**
     * String value. Should be set if feed_attribute_id refers to a feed attribute
     * of type STRING, URL or DATE_TIME.
     * For STRING the maximum length is 1500 characters. For URL the maximum
     * length is 2076 characters. For DATE_TIME the format of the string must
     * be the same as start and end time for the feed item.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue string_value = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->string_value = $var;

        return $this;
    }

    /**
     * Double value. Should be set if feed_attribute_id refers to a feed attribute
     * of type DOUBLE.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue double_value = 5;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getDoubleValue()
    {
        return $this->double_value;
    }

    /**
     * Double value. Should be set if feed_attribute_id refers to a feed attribute
     * of type DOUBLE.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue double_value = 5;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->double_value = $var;

        return $this;
    }

    /**
     * Price value. Should be set if feed_attribute_id refers to a feed attribute
     * of type PRICE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.Money price_value = 6;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\Money
     */
    public function getPriceValue()
    {
        return $this->price_value;
    }

    /**
     * Price value. Should be set if feed_attribute_id refers to a feed attribute
     * of type PRICE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.Money price_value = 6;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\Money $var
     * @return $this
     */
    public function setPriceValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\Money::class);
        $this->price_value = $var;

        return $this;
    }

    /**
     * Repeated int64 value. Should be set if feed_attribute_id refers to a feed
     * attribute of type INT64_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value integer_values = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIntegerValues()
    {
        return $this->integer_values;
    }

    /**
     * Repeated int64 value. Should be set if feed_attribute_id refers to a feed
     * attribute of type INT64_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value integer_values = 7;</code>
     * @param \Google\Protobuf\Int64Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIntegerValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Int64Value::class);
        $this->integer_values = $arr;

        return $this;
    }

    /**
     * Repeated bool value. Should be set if feed_attribute_id refers to a feed
     * attribute of type BOOLEAN_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.BoolValue boolean_values = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBooleanValues()
    {
        return $this->boolean_values;
    }

    /**
     * Repeated bool value. Should be set if feed_attribute_id refers to a feed
     * attribute of type BOOLEAN_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.BoolValue boolean_values = 8;</code>
     * @param \Google\Protobuf\BoolValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBooleanValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\BoolValue::class);
        $this->boolean_values = $arr;

        return $this;
    }

    /**
     * Repeated string value. Should be set if feed_attribute_id refers to a feed
     * attribute of type STRING_LIST, URL_LIST or DATE_TIME_LIST.
     * For STRING_LIST and URL_LIST the total size of the list in bytes may not
     * exceed 3000. For DATE_TIME_LIST the number of elements may not exceed 200.
     * For STRING_LIST the maximum length of each string element is 1500
     * characters. For URL_LIST the maximum length is 2076 characters. For
     * DATE_TIME the format of the string must be the same as start and end time
     * for the feed item.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue string_values = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStringValues()
    {
        return $this->string_values;
    }

    /**
     * Repeated string value. Should be set if feed_attribute_id refers to a feed
     * attribute of type STRING_LIST, URL_LIST or DATE_TIME_LIST.
     * For STRING_LIST and URL_LIST the total size of the list in bytes may not
     * exceed 3000. For DATE_TIME_LIST the number of elements may not exceed 200.
     * For STRING_LIST the maximum length of each string element is 1500
     * characters. For URL_LIST the maximum length is 2076 characters. For
     * DATE_TIME the format of the string must be the same as start and end time
     * for the feed item.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue string_values = 9;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStringValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->string_values = $arr;

        return $this;
    }

    /**
     * Repeated double value. Should be set if feed_attribute_id refers to a feed
     * attribute of type DOUBLE_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.DoubleValue double_values = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDoubleValues()
    {
        return $this->double_values;
    }

    /**
     * Repeated double value. Should be set if feed_attribute_id refers to a feed
     * attribute of type DOUBLE_LIST.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.DoubleValue double_values = 10;</code>
     * @param \Google\Protobuf\DoubleValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDoubleValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\DoubleValue::class);
        $this->double_values = $arr;

        return $this;
    }

}

