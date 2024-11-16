<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4\ReoderTripRequest;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.ReoderTripRequest.ReorderDay</code>
 */
class ReorderDay extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string activity_ids = 1;</code>
     */
    private $activity_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $activity_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BookmarkTrip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string activity_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivityIds()
    {
        return $this->activity_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string activity_ids = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivityIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->activity_ids = $arr;

        return $this;
    }

}

