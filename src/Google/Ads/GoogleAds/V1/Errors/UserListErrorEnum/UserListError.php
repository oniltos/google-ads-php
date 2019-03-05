<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/user_list_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\UserListErrorEnum;

/**
 * Enum describing possible user list errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.UserListErrorEnum.UserListError</code>
 */
class UserListError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Creating and updating external remarketing user lists is not supported.
     *
     * Generated from protobuf enum <code>EXTERNAL_REMARKETING_USER_LIST_MUTATE_NOT_SUPPORTED = 2;</code>
     */
    const EXTERNAL_REMARKETING_USER_LIST_MUTATE_NOT_SUPPORTED = 2;
    /**
     * Concrete type of user list is required.
     *
     * Generated from protobuf enum <code>CONCRETE_TYPE_REQUIRED = 3;</code>
     */
    const CONCRETE_TYPE_REQUIRED = 3;
    /**
     * Creating/updating user list conversion types requires specifying the
     * conversion type Id.
     *
     * Generated from protobuf enum <code>CONVERSION_TYPE_ID_REQUIRED = 4;</code>
     */
    const CONVERSION_TYPE_ID_REQUIRED = 4;
    /**
     * Remarketing user list cannot have duplicate conversion types.
     *
     * Generated from protobuf enum <code>DUPLICATE_CONVERSION_TYPES = 5;</code>
     */
    const DUPLICATE_CONVERSION_TYPES = 5;
    /**
     * Conversion type is invalid/unknown.
     *
     * Generated from protobuf enum <code>INVALID_CONVERSION_TYPE = 6;</code>
     */
    const INVALID_CONVERSION_TYPE = 6;
    /**
     * User list description is empty or invalid.
     *
     * Generated from protobuf enum <code>INVALID_DESCRIPTION = 7;</code>
     */
    const INVALID_DESCRIPTION = 7;
    /**
     * User list name is empty or invalid.
     *
     * Generated from protobuf enum <code>INVALID_NAME = 8;</code>
     */
    const INVALID_NAME = 8;
    /**
     * Type of the UserList does not match.
     *
     * Generated from protobuf enum <code>INVALID_TYPE = 9;</code>
     */
    const INVALID_TYPE = 9;
    /**
     * Embedded logical user lists are not allowed.
     *
     * Generated from protobuf enum <code>CAN_NOT_ADD_LOGICAL_LIST_AS_LOGICAL_LIST_OPERAND = 10;</code>
     */
    const CAN_NOT_ADD_LOGICAL_LIST_AS_LOGICAL_LIST_OPERAND = 10;
    /**
     * User list rule operand is invalid.
     *
     * Generated from protobuf enum <code>INVALID_USER_LIST_LOGICAL_RULE_OPERAND = 11;</code>
     */
    const INVALID_USER_LIST_LOGICAL_RULE_OPERAND = 11;
    /**
     * Name is already being used for another user list for the account.
     *
     * Generated from protobuf enum <code>NAME_ALREADY_USED = 12;</code>
     */
    const NAME_ALREADY_USED = 12;
    /**
     * Name is required when creating a new conversion type.
     *
     * Generated from protobuf enum <code>NEW_CONVERSION_TYPE_NAME_REQUIRED = 13;</code>
     */
    const NEW_CONVERSION_TYPE_NAME_REQUIRED = 13;
    /**
     * The given conversion type name has been used.
     *
     * Generated from protobuf enum <code>CONVERSION_TYPE_NAME_ALREADY_USED = 14;</code>
     */
    const CONVERSION_TYPE_NAME_ALREADY_USED = 14;
    /**
     * Only an owner account may edit a user list.
     *
     * Generated from protobuf enum <code>OWNERSHIP_REQUIRED_FOR_SET = 15;</code>
     */
    const OWNERSHIP_REQUIRED_FOR_SET = 15;
    /**
     * Creating user list without setting type in oneof user_list field, or
     * creating/updating read-only user list types is not allowed.
     *
     * Generated from protobuf enum <code>USER_LIST_MUTATE_NOT_SUPPORTED = 16;</code>
     */
    const USER_LIST_MUTATE_NOT_SUPPORTED = 16;
    /**
     * Rule is invalid.
     *
     * Generated from protobuf enum <code>INVALID_RULE = 17;</code>
     */
    const INVALID_RULE = 17;
    /**
     * The specified date range is empty.
     *
     * Generated from protobuf enum <code>INVALID_DATE_RANGE = 27;</code>
     */
    const INVALID_DATE_RANGE = 27;
    /**
     * A UserList which is privacy sensitive or legal rejected cannot be mutated
     * by external users.
     *
     * Generated from protobuf enum <code>CAN_NOT_MUTATE_SENSITIVE_USERLIST = 28;</code>
     */
    const CAN_NOT_MUTATE_SENSITIVE_USERLIST = 28;
    /**
     * Maximum number of rulebased user lists a customer can have.
     *
     * Generated from protobuf enum <code>MAX_NUM_RULEBASED_USERLISTS = 29;</code>
     */
    const MAX_NUM_RULEBASED_USERLISTS = 29;
    /**
     * BasicUserList's billable record field cannot be modified once it is set.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_BILLABLE_RECORD_COUNT = 30;</code>
     */
    const CANNOT_MODIFY_BILLABLE_RECORD_COUNT = 30;
    /**
     * crm_based_user_list.app_id field must be set when upload_key_type is
     * MOBILE_ADVERTISING_ID.
     *
     * Generated from protobuf enum <code>APP_ID_NOT_SET = 31;</code>
     */
    const APP_ID_NOT_SET = 31;
    /**
     * Name of the user list is reserved for system generated lists and cannot
     * be used.
     *
     * Generated from protobuf enum <code>USERLIST_NAME_IS_RESERVED_FOR_SYSTEM_LIST = 32;</code>
     */
    const USERLIST_NAME_IS_RESERVED_FOR_SYSTEM_LIST = 32;
    /**
     * Advertiser needs to be whitelisted to use remarketing lists created from
     * advertiser uploaded data (e.g., Customer Match lists).
     *
     * Generated from protobuf enum <code>ADVERTISER_NOT_WHITELISTED_FOR_USING_UPLOADED_DATA = 33;</code>
     */
    const ADVERTISER_NOT_WHITELISTED_FOR_USING_UPLOADED_DATA = 33;
    /**
     * The provided rule_type is not supported for the user list.
     *
     * Generated from protobuf enum <code>RULE_TYPE_IS_NOT_SUPPORTED = 34;</code>
     */
    const RULE_TYPE_IS_NOT_SUPPORTED = 34;
    /**
     * Similar user list cannot be used as a logical user list operand.
     *
     * Generated from protobuf enum <code>CAN_NOT_ADD_A_SIMILAR_USERLIST_AS_LOGICAL_LIST_OPERAND = 35;</code>
     */
    const CAN_NOT_ADD_A_SIMILAR_USERLIST_AS_LOGICAL_LIST_OPERAND = 35;
    /**
     * Logical user list should not have a mix of CRM based user list and other
     * types of lists in its rules.
     *
     * Generated from protobuf enum <code>CAN_NOT_MIX_CRM_BASED_IN_LOGICAL_LIST_WITH_OTHER_LISTS = 36;</code>
     */
    const CAN_NOT_MIX_CRM_BASED_IN_LOGICAL_LIST_WITH_OTHER_LISTS = 36;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListError::class, \Google\Ads\GoogleAds\V1\Errors\UserListErrorEnum_UserListError::class);

