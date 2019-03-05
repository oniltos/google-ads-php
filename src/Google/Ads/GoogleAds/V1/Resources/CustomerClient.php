<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/customer_client.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between the given customer and a client customer. CustomerClients only
 * exist for manager customers. All direct and indirect client customers are
 * included, as well as the manager itself.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.CustomerClient</code>
 */
class CustomerClient extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3;</code>
     */
    private $client_customer = null;
    /**
     * Specifies whether this is a hidden account. Learn more about hidden
     * accounts
     * <a href="https://support.google.com/google-ads/answer/7519830">here</a>.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4;</code>
     */
    private $hidden = null;
    /**
     * Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5;</code>
     */
    private $level = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the customer client.
     *           CustomerClient resource names have the form:
     *           `customers/{customer_id}/customerClients/{client_customer_id}`
     *     @type \Google\Protobuf\StringValue $client_customer
     *           The resource name of the client-customer which is linked to
     *           the given customer. Read only.
     *     @type \Google\Protobuf\BoolValue $hidden
     *           Specifies whether this is a hidden account. Learn more about hidden
     *           accounts
     *           <a href="https://support.google.com/google-ads/answer/7519830">here</a>.
     *           Read only.
     *     @type \Google\Protobuf\Int64Value $level
     *           Distance between given customer and client. For self link, the level value
     *           will be 0. Read only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CustomerClient::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
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
     * The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getClientCustomer()
    {
        return $this->client_customer;
    }

    /**
     * The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setClientCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->client_customer = $var;

        return $this;
    }

    /**
     * Specifies whether this is a hidden account. Learn more about hidden
     * accounts
     * <a href="https://support.google.com/google-ads/answer/7519830">here</a>.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Specifies whether this is a hidden account. Learn more about hidden
     * accounts
     * <a href="https://support.google.com/google-ads/answer/7519830">here</a>.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->level = $var;

        return $this;
    }

}

