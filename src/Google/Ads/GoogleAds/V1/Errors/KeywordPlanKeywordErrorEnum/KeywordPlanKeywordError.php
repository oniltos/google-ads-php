<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/keyword_plan_keyword_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\KeywordPlanKeywordErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible errors from applying a keyword plan keyword.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.KeywordPlanKeywordErrorEnum.KeywordPlanKeywordError</code>
 */
class KeywordPlanKeywordError
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
     * A keyword or negative keyword has invalid match type.
     *
     * Generated from protobuf enum <code>INVALID_KEYWORD_MATCH_TYPE = 2;</code>
     */
    const INVALID_KEYWORD_MATCH_TYPE = 2;
    /**
     * A keyword or negative keyword with same text and match type already
     * exists.
     *
     * Generated from protobuf enum <code>DUPLICATE_KEYWORD = 3;</code>
     */
    const DUPLICATE_KEYWORD = 3;
    /**
     * Keyword or negative keyword text exceeds the allowed limit.
     *
     * Generated from protobuf enum <code>KEYWORD_TEXT_TOO_LONG = 4;</code>
     */
    const KEYWORD_TEXT_TOO_LONG = 4;
    /**
     * Keyword or negative keyword text has invalid characters or symbols.
     *
     * Generated from protobuf enum <code>KEYWORD_HAS_INVALID_CHARS = 5;</code>
     */
    const KEYWORD_HAS_INVALID_CHARS = 5;
    /**
     * Keyword or negative keyword text has too many words.
     *
     * Generated from protobuf enum <code>KEYWORD_HAS_TOO_MANY_WORDS = 6;</code>
     */
    const KEYWORD_HAS_TOO_MANY_WORDS = 6;
    /**
     * Keyword or negative keyword has invalid text.
     *
     * Generated from protobuf enum <code>INVALID_KEYWORD_TEXT = 7;</code>
     */
    const INVALID_KEYWORD_TEXT = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INVALID_KEYWORD_MATCH_TYPE => 'INVALID_KEYWORD_MATCH_TYPE',
        self::DUPLICATE_KEYWORD => 'DUPLICATE_KEYWORD',
        self::KEYWORD_TEXT_TOO_LONG => 'KEYWORD_TEXT_TOO_LONG',
        self::KEYWORD_HAS_INVALID_CHARS => 'KEYWORD_HAS_INVALID_CHARS',
        self::KEYWORD_HAS_TOO_MANY_WORDS => 'KEYWORD_HAS_TOO_MANY_WORDS',
        self::INVALID_KEYWORD_TEXT => 'INVALID_KEYWORD_TEXT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordPlanKeywordError::class, \Google\Ads\GoogleAds\V1\Errors\KeywordPlanKeywordErrorEnum_KeywordPlanKeywordError::class);

