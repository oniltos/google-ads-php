<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/customer_label.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a relationship between a customer and a label. This customer may
 * not have access to all the labels attached to it. Additional CustomerLabels
 * may be returned by increasing permissions with login-customer-id.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.CustomerLabel</code>
 */
class CustomerLabel extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the resource.
     * Customer label resource names have the form:
     * `customers/{customer_id}/customerLabels/{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The resource name of the customer to which the label is attached.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 2;</code>
     */
    private $customer = null;
    /**
     * The resource name of the label assigned to the customer.
     * Note: the Customer ID portion of the label resource name is not
     * validated when creating a new CustomerLabel.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     */
    private $label = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Name of the resource.
     *           Customer label resource names have the form:
     *           `customers/{customer_id}/customerLabels/{label_id}`
     *     @type \Google\Protobuf\StringValue $customer
     *           The resource name of the customer to which the label is attached.
     *           Read only.
     *     @type \Google\Protobuf\StringValue $label
     *           The resource name of the label assigned to the customer.
     *           Note: the Customer ID portion of the label resource name is not
     *           validated when creating a new CustomerLabel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CustomerLabel::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the resource.
     * Customer label resource names have the form:
     * `customers/{customer_id}/customerLabels/{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Name of the resource.
     * Customer label resource names have the form:
     * `customers/{customer_id}/customerLabels/{label_id}`
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
     * The resource name of the customer to which the label is attached.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * The resource name of the customer to which the label is attached.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->customer = $var;

        return $this;
    }

    /**
     * The resource name of the label assigned to the customer.
     * Note: the Customer ID portion of the label resource name is not
     * validated when creating a new CustomerLabel.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * The resource name of the label assigned to the customer.
     * Note: the Customer ID portion of the label resource name is not
     * validated when creating a new CustomerLabel.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->label = $var;

        return $this;
    }

}

