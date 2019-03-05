<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V1\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The keyword recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.Recommendation.KeywordRecommendation</code>
 */
class KeywordRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * The recommended keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.KeywordInfo keyword = 1;</code>
     */
    private $keyword = null;
    /**
     * The recommended CPC (cost-per-click) bid.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_cpc_bid_micros = 2;</code>
     */
    private $recommended_cpc_bid_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V1\Common\KeywordInfo $keyword
     *           The recommended keyword.
     *     @type \Google\Protobuf\Int64Value $recommended_cpc_bid_micros
     *           The recommended CPC (cost-per-click) bid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * The recommended keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.KeywordInfo keyword = 1;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\KeywordInfo
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * The recommended keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.KeywordInfo keyword = 1;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\KeywordInfo $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\KeywordInfo::class);
        $this->keyword = $var;

        return $this;
    }

    /**
     * The recommended CPC (cost-per-click) bid.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_cpc_bid_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedCpcBidMicros()
    {
        return $this->recommended_cpc_bid_micros;
    }

    /**
     * The recommended CPC (cost-per-click) bid.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_cpc_bid_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedCpcBidMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_cpc_bid_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordRecommendation::class, \Google\Ads\GoogleAds\V1\Resources\Recommendation_KeywordRecommendation::class);

