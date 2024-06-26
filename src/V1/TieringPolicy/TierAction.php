<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/volume.proto

namespace Google\Cloud\NetApp\V1\TieringPolicy;

use UnexpectedValueException;

/**
 * Tier action for the volume.
 *
 * Protobuf type <code>google.cloud.netapp.v1.TieringPolicy.TierAction</code>
 */
class TierAction
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>TIER_ACTION_UNSPECIFIED = 0;</code>
     */
    const TIER_ACTION_UNSPECIFIED = 0;
    /**
     * When tiering is enabled, new cold data will be tiered.
     *
     * Generated from protobuf enum <code>ENABLED = 1;</code>
     */
    const ENABLED = 1;
    /**
     * When paused, tiering won't be performed on new data. Existing data stays
     * tiered until accessed.
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;

    private static $valueToName = [
        self::TIER_ACTION_UNSPECIFIED => 'TIER_ACTION_UNSPECIFIED',
        self::ENABLED => 'ENABLED',
        self::PAUSED => 'PAUSED',
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


