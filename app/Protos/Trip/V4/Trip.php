<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.Trip</code>
 */
class Trip extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest plan_request = 2;</code>
     */
    protected $plan_request = null;
    /**
     * Generated from protobuf field <code>repeated .trip.v4.TripDay days = 3;</code>
     */
    private $days;
    /**
     * Generated from protobuf field <code>.trip.v4.Budget budget = 4;</code>
     */
    protected $budget = null;
    /**
     * Generated from protobuf field <code>optional .trip.v4.Affiliate affiliate = 5;</code>
     */
    protected $affiliate = null;
    /**
     * Generated from protobuf field <code>optional .trip.v4.Trip.Meta meta = 6;</code>
     */
    protected $meta = null;
    /**
     * Generated from protobuf field <code>optional .trip.v4.HotelRecommendation hotel_recommendation = 7;</code>
     */
    protected $hotel_recommendation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \App\Protos\Trip\V4\PlanAsyncRequest $plan_request
     *     @type array<\App\Protos\Trip\V4\TripDay>|\Google\Protobuf\Internal\RepeatedField $days
     *     @type \App\Protos\Trip\V4\Budget $budget
     *     @type \App\Protos\Trip\V4\Affiliate $affiliate
     *     @type \App\Protos\Trip\V4\Trip\Meta $meta
     *     @type \App\Protos\Trip\V4\HotelRecommendation $hotel_recommendation
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
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest plan_request = 2;</code>
     * @return \App\Protos\Trip\V4\PlanAsyncRequest|null
     */
    public function getPlanRequest()
    {
        return $this->plan_request;
    }

    public function hasPlanRequest()
    {
        return isset($this->plan_request);
    }

    public function clearPlanRequest()
    {
        unset($this->plan_request);
    }

    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest plan_request = 2;</code>
     * @param \App\Protos\Trip\V4\PlanAsyncRequest $var
     * @return $this
     */
    public function setPlanRequest($var)
    {
        GPBUtil::checkMessage($var, \App\Protos\Trip\V4\PlanAsyncRequest::class);
        $this->plan_request = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.TripDay days = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.TripDay days = 3;</code>
     * @param array<\App\Protos\Trip\V4\TripDay>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDays($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Protos\Trip\V4\TripDay::class);
        $this->days = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.trip.v4.Budget budget = 4;</code>
     * @return \App\Protos\Trip\V4\Budget|null
     */
    public function getBudget()
    {
        return $this->budget;
    }

    public function hasBudget()
    {
        return isset($this->budget);
    }

    public function clearBudget()
    {
        unset($this->budget);
    }

    /**
     * Generated from protobuf field <code>.trip.v4.Budget budget = 4;</code>
     * @param \App\Protos\Trip\V4\Budget $var
     * @return $this
     */
    public function setBudget($var)
    {
        GPBUtil::checkMessage($var, \App\Protos\Trip\V4\Budget::class);
        $this->budget = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .trip.v4.Affiliate affiliate = 5;</code>
     * @return \App\Protos\Trip\V4\Affiliate|null
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    public function hasAffiliate()
    {
        return isset($this->affiliate);
    }

    public function clearAffiliate()
    {
        unset($this->affiliate);
    }

    /**
     * Generated from protobuf field <code>optional .trip.v4.Affiliate affiliate = 5;</code>
     * @param \App\Protos\Trip\V4\Affiliate $var
     * @return $this
     */
    public function setAffiliate($var)
    {
        GPBUtil::checkMessage($var, \App\Protos\Trip\V4\Affiliate::class);
        $this->affiliate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .trip.v4.Trip.Meta meta = 6;</code>
     * @return \App\Protos\Trip\V4\Trip\Meta|null
     */
    public function getMeta()
    {
        return $this->meta;
    }

    public function hasMeta()
    {
        return isset($this->meta);
    }

    public function clearMeta()
    {
        unset($this->meta);
    }

    /**
     * Generated from protobuf field <code>optional .trip.v4.Trip.Meta meta = 6;</code>
     * @param \App\Protos\Trip\V4\Trip\Meta $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkMessage($var, Trip\Meta::class);
        $this->meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .trip.v4.HotelRecommendation hotel_recommendation = 7;</code>
     * @return \App\Protos\Trip\V4\HotelRecommendation|null
     */
    public function getHotelRecommendation()
    {
        return $this->hotel_recommendation;
    }

    public function hasHotelRecommendation()
    {
        return isset($this->hotel_recommendation);
    }

    public function clearHotelRecommendation()
    {
        unset($this->hotel_recommendation);
    }

    /**
     * Generated from protobuf field <code>optional .trip.v4.HotelRecommendation hotel_recommendation = 7;</code>
     * @param \App\Protos\Trip\V4\HotelRecommendation $var
     * @return $this
     */
    public function setHotelRecommendation($var)
    {
        GPBUtil::checkMessage($var, \App\Protos\Trip\V4\HotelRecommendation::class);
        $this->hotel_recommendation = $var;

        return $this;
    }

}

