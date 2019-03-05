<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/product_bidding_category_constant.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Product Bidding Category.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.ProductBiddingCategoryConstant</code>
 */
class ProductBiddingCategoryConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the product bidding category.
     * Product bidding category resource names have the form:
     * `productBiddingCategoryConstants/{country_code}~{level}~{id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    private $id = null;
    /**
     * Two-letter upper-case country code of the product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 3;</code>
     */
    private $country_code = null;
    /**
     * Resource name of the parent product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue product_bidding_category_constant_parent = 4;</code>
     */
    private $product_bidding_category_constant_parent = null;
    /**
     * Level of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevel level = 5;</code>
     */
    private $level = 0;
    /**
     * Status of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ProductBiddingCategoryStatusEnum.ProductBiddingCategoryStatus status = 6;</code>
     */
    private $status = 0;
    /**
     * Language code of the product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 7;</code>
     */
    private $language_code = null;
    /**
     * Display value of the product bidding category localized according to
     * language_code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue localized_name = 8;</code>
     */
    private $localized_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the product bidding category.
     *           Product bidding category resource names have the form:
     *           `productBiddingCategoryConstants/{country_code}~{level}~{id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           ID of the product bidding category.
     *           This ID is equivalent to the google_product_category ID as described in
     *           this article: https://support.google.com/merchants/answer/6324436.
     *     @type \Google\Protobuf\StringValue $country_code
     *           Two-letter upper-case country code of the product bidding category.
     *     @type \Google\Protobuf\StringValue $product_bidding_category_constant_parent
     *           Resource name of the parent product bidding category.
     *     @type int $level
     *           Level of the product bidding category.
     *     @type int $status
     *           Status of the product bidding category.
     *     @type \Google\Protobuf\StringValue $language_code
     *           Language code of the product bidding category.
     *     @type \Google\Protobuf\StringValue $localized_name
     *           Display value of the product bidding category localized according to
     *           language_code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\ProductBiddingCategoryConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the product bidding category.
     * Product bidding category resource names have the form:
     * `productBiddingCategoryConstants/{country_code}~{level}~{id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the product bidding category.
     * Product bidding category resource names have the form:
     * `productBiddingCategoryConstants/{country_code}~{level}~{id}`
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
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
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
     * Two-letter upper-case country code of the product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Two-letter upper-case country code of the product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 3;</code>
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
     * Resource name of the parent product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue product_bidding_category_constant_parent = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getProductBiddingCategoryConstantParent()
    {
        return $this->product_bidding_category_constant_parent;
    }

    /**
     * Resource name of the parent product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue product_bidding_category_constant_parent = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setProductBiddingCategoryConstantParent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->product_bidding_category_constant_parent = $var;

        return $this;
    }

    /**
     * Level of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevel level = 5;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Level of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevel level = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\ProductBiddingCategoryLevelEnum_ProductBiddingCategoryLevel::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Status of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ProductBiddingCategoryStatusEnum.ProductBiddingCategoryStatus status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ProductBiddingCategoryStatusEnum.ProductBiddingCategoryStatus status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\ProductBiddingCategoryStatusEnum_ProductBiddingCategoryStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Language code of the product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Language code of the product bidding category.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Display value of the product bidding category localized according to
     * language_code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue localized_name = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLocalizedName()
    {
        return $this->localized_name;
    }

    /**
     * Display value of the product bidding category localized according to
     * language_code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue localized_name = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLocalizedName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->localized_name = $var;

        return $this;
    }

}

