<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.SaveTripDayRequest</code>
 */
class SaveTripDayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>uint32 day = 2;</code>
     */
    protected $day = 0;
    /**
     * Generated from protobuf field <code>.trip.v4.TripDay trip_day = 3;</code>
     */
    protected $trip_day = null;
    /**
     * Generated from protobuf field <code>.trip.v4.PlanSyncRequest plan_sync_request = 4;</code>
     */
    protected $plan_sync_request = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $day
     *     @type \App\Protos\Trip\V4\TripDay $trip_day
     *     @type \App\Protos\Trip\V4\PlanSyncRequest $plan_sync_request
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
     * Generated from protobuf field <code>uint32 day = 2;</code>
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Generated from protobuf field <code>uint32 day = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDay($var)
    {
        GPBUtil::checkUint32($var);
        $this->day = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.trip.v4.TripDay trip_day = 3;</code>
     * @return \App\Protos\Trip\V4\TripDay|null
     */
    public function getTripDay()
    {
        return $this->trip_day;
    }

    public function hasTripDay()
    {
        return isset($this->trip_day);
    }

    public function clearTripDay()
    {
        unset($this->trip_day);
    }

    /**
     * Generated from protobuf field <code>.trip.v4.TripDay trip_day = 3;</code>
     * @param \App\Protos\Trip\V4\TripDay $var
     * @return $this
     */
    public function setTripDay($var)
    {
        GPBUtil::checkMessage($var, \App\Protos\Trip\V4\TripDay::class);
        $this->trip_day = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.trip.v4.PlanSyncRequest plan_sync_request = 4;</code>
     * @return \App\Protos\Trip\V4\PlanSyncRequest|null
     */
    public function getPlanSyncRequest()
    {
        return $this->plan_sync_request;
    }

    public function hasPlanSyncRequest()
    {
        return isset($this->plan_sync_request);
    }

    public function clearPlanSyncRequest()
    {
        unset($this->plan_sync_request);
    }

    /**
     * Generated from protobuf field <code>.trip.v4.PlanSyncRequest plan_sync_request = 4;</code>
     * @param \App\Protos\Trip\V4\PlanSyncRequest $var
     * @return $this
     */
    public function setPlanSyncRequest($var)
    {
        GPBUtil::checkMessage($var, \App\Protos\Trip\V4\PlanSyncRequest::class);
        $this->plan_sync_request = $var;

        return $this;
    }

}

