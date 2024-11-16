<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.DeleteTripDayActivityRequest</code>
 */
class DeleteTripDayActivityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>uint32 days = 2;</code>
     */
    protected $days = 0;
    /**
     * Generated from protobuf field <code>string aid = 3;</code>
     */
    protected $aid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $days
     *     @type string $aid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BookmarkTrip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 days = 2;</code>
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Generated from protobuf field <code>uint32 days = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDays($var)
    {
        GPBUtil::checkUint32($var);
        $this->days = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string aid = 3;</code>
     * @return string
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Generated from protobuf field <code>string aid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAid($var)
    {
        GPBUtil::checkString($var, True);
        $this->aid = $var;

        return $this;
    }

}
