<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/detail_placement_view.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A view with metrics aggregated by ad group and URL or YouTube video.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.DetailPlacementView</code>
 */
class DetailPlacementView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}_{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the detail placement view.
     *           Detail placement view resource names have the form:
     *           `customers/{customer_id}/detailPlacementViews/{ad_group_id}_{base64_placement}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\DetailPlacementView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}_{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}_{base64_placement}`
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

}

