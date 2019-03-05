<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/mutate_job_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MutateJob result.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.MutateJobResult</code>
 */
class MutateJobResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Index of the Simply operation.
     *
     * Generated from protobuf field <code>int64 operation_index = 1;</code>
     */
    private $operation_index = 0;
    /**
     * Response for the mutate.
     * May be empty if errors occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.MutateOperationResponse mutate_operation_response = 2;</code>
     */
    private $mutate_operation_response = null;
    /**
     * Details of the errors when processing the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $operation_index
     *           Index of the Simply operation.
     *     @type \Google\Ads\GoogleAds\V1\Services\MutateOperationResponse $mutate_operation_response
     *           Response for the mutate.
     *           May be empty if errors occurred.
     *     @type \Google\Rpc\Status $status
     *           Details of the errors when processing the operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\MutateJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Index of the Simply operation.
     *
     * Generated from protobuf field <code>int64 operation_index = 1;</code>
     * @return int|string
     */
    public function getOperationIndex()
    {
        return $this->operation_index;
    }

    /**
     * Index of the Simply operation.
     *
     * Generated from protobuf field <code>int64 operation_index = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOperationIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->operation_index = $var;

        return $this;
    }

    /**
     * Response for the mutate.
     * May be empty if errors occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.MutateOperationResponse mutate_operation_response = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Services\MutateOperationResponse
     */
    public function getMutateOperationResponse()
    {
        return $this->mutate_operation_response;
    }

    /**
     * Response for the mutate.
     * May be empty if errors occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.MutateOperationResponse mutate_operation_response = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Services\MutateOperationResponse $var
     * @return $this
     */
    public function setMutateOperationResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Services\MutateOperationResponse::class);
        $this->mutate_operation_response = $var;

        return $this;
    }

    /**
     * Details of the errors when processing the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     * @return \Google\Rpc\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Details of the errors when processing the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

