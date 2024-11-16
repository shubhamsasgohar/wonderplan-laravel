<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.PlanAsyncRequest</code>
 */
class PlanAsyncRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .trip.v4.PlanAsyncRequest.Feature feature = 1;</code>
     */
    protected $feature = null;
    /**
     * Generated from protobuf field <code>optional string origin_destination_id = 2;</code>
     */
    protected $origin_destination_id = null;
    /**
     * Generated from protobuf field <code>string destination_destination_id = 3;</code>
     */
    protected $destination_destination_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp travel_at = 4;</code>
     */
    protected $travel_at = null;
    /**
     *    uint32 days = 5 [(buf.validate.field).uint32 = {lte: 10}];
     *
     * Generated from protobuf field <code>uint32 days = 5;</code>
     */
    protected $days = 0;
    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.BudgetType budget_type = 6;</code>
     */
    protected $budget_type = 0;
    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.GroupType group_type = 7;</code>
     */
    protected $group_type = 0;
    /**
     * Generated from protobuf field <code>repeated .trip.v4.ActivityType activity_types = 8;</code>
     */
    private $activity_types;
    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.DietaryRestriction dietary_restriction = 9;</code>
     */
    protected $dietary_restriction = null;
    /**
     * default to public, to be backward compatible
     *
     * Generated from protobuf field <code>optional bool is_private = 10;</code>
     */
    protected $is_private = null;
    /**
     * this is for internal use only
     *
     * Generated from protobuf field <code>optional string owner_id = 11;</code>
     */
    protected $owner_id = null;
    /**
     * internal use only
     *
     * Generated from protobuf field <code>optional string title = 12;</code>
     */
    protected $title = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \App\Protos\Trip\V4\PlanAsyncRequest\Feature $feature
     *     @type string $origin_destination_id
     *     @type string $destination_destination_id
     *     @type \Google\Protobuf\Timestamp $travel_at
     *     @type int $days
     *              uint32 days = 5 [(buf.validate.field).uint32 = {lte: 10}];
     *     @type int $budget_type
     *     @type int $group_type
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $activity_types
     *     @type \App\Protos\Trip\V4\PlanAsyncRequest\DietaryRestriction $dietary_restriction
     *     @type bool $is_private
     *           default to public, to be backward compatible
     *     @type string $owner_id
     *           this is for internal use only
     *     @type string $title
     *           internal use only
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BookmarkTrip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .trip.v4.PlanAsyncRequest.Feature feature = 1;</code>
     * @return \App\Protos\Trip\V4\PlanAsyncRequest\Feature|null
     */
    public function getFeature()
    {
        return $this->feature;
    }

    public function hasFeature()
    {
        return isset($this->feature);
    }

    public function clearFeature()
    {
        unset($this->feature);
    }

    /**
     * Generated from protobuf field <code>optional .trip.v4.PlanAsyncRequest.Feature feature = 1;</code>
     * @param \App\Protos\Trip\V4\PlanAsyncRequest\Feature $var
     * @return $this
     */
    public function setFeature($var)
    {
        GPBUtil::checkMessage($var, PlanAsyncRequest\Feature::class);
        $this->feature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string origin_destination_id = 2;</code>
     * @return string
     */
    public function getOriginDestinationId()
    {
        return isset($this->origin_destination_id) ? $this->origin_destination_id : '';
    }

    public function hasOriginDestinationId()
    {
        return isset($this->origin_destination_id);
    }

    public function clearOriginDestinationId()
    {
        unset($this->origin_destination_id);
    }

    /**
     * Generated from protobuf field <code>optional string origin_destination_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginDestinationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->origin_destination_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string destination_destination_id = 3;</code>
     * @return string
     */
    public function getDestinationDestinationId()
    {
        return $this->destination_destination_id;
    }

    /**
     * Generated from protobuf field <code>string destination_destination_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationDestinationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_destination_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp travel_at = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTravelAt()
    {
        return $this->travel_at;
    }

    public function hasTravelAt()
    {
        return isset($this->travel_at);
    }

    public function clearTravelAt()
    {
        unset($this->travel_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp travel_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTravelAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->travel_at = $var;

        return $this;
    }

    /**
     *    uint32 days = 5 [(buf.validate.field).uint32 = {lte: 10}];
     *
     * Generated from protobuf field <code>uint32 days = 5;</code>
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     *    uint32 days = 5 [(buf.validate.field).uint32 = {lte: 10}];
     *
     * Generated from protobuf field <code>uint32 days = 5;</code>
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
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.BudgetType budget_type = 6;</code>
     * @return int
     */
    public function getBudgetType()
    {
        return $this->budget_type;
    }

    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.BudgetType budget_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBudgetType($var)
    {
        GPBUtil::checkEnum($var, PlanAsyncRequest\BudgetType::class);
        $this->budget_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.GroupType group_type = 7;</code>
     * @return int
     */
    public function getGroupType()
    {
        return $this->group_type;
    }

    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.GroupType group_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupType($var)
    {
        GPBUtil::checkEnum($var, PlanAsyncRequest\GroupType::class);
        $this->group_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.ActivityType activity_types = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivityTypes()
    {
        return $this->activity_types;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.ActivityType activity_types = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivityTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \App\Protos\Trip\V4\ActivityType::class);
        $this->activity_types = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.DietaryRestriction dietary_restriction = 9;</code>
     * @return \App\Protos\Trip\V4\PlanAsyncRequest\DietaryRestriction|null
     */
    public function getDietaryRestriction()
    {
        return $this->dietary_restriction;
    }

    public function hasDietaryRestriction()
    {
        return isset($this->dietary_restriction);
    }

    public function clearDietaryRestriction()
    {
        unset($this->dietary_restriction);
    }

    /**
     * Generated from protobuf field <code>.trip.v4.PlanAsyncRequest.DietaryRestriction dietary_restriction = 9;</code>
     * @param \App\Protos\Trip\V4\PlanAsyncRequest\DietaryRestriction $var
     * @return $this
     */
    public function setDietaryRestriction($var)
    {
        GPBUtil::checkMessage($var, PlanAsyncRequest\DietaryRestriction::class);
        $this->dietary_restriction = $var;

        return $this;
    }

    /**
     * default to public, to be backward compatible
     *
     * Generated from protobuf field <code>optional bool is_private = 10;</code>
     * @return bool
     */
    public function getIsPrivate()
    {
        return isset($this->is_private) ? $this->is_private : false;
    }

    public function hasIsPrivate()
    {
        return isset($this->is_private);
    }

    public function clearIsPrivate()
    {
        unset($this->is_private);
    }

    /**
     * default to public, to be backward compatible
     *
     * Generated from protobuf field <code>optional bool is_private = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPrivate($var)
    {
        GPBUtil::checkBool($var);
        $this->is_private = $var;

        return $this;
    }

    /**
     * this is for internal use only
     *
     * Generated from protobuf field <code>optional string owner_id = 11;</code>
     * @return string
     */
    public function getOwnerId()
    {
        return isset($this->owner_id) ? $this->owner_id : '';
    }

    public function hasOwnerId()
    {
        return isset($this->owner_id);
    }

    public function clearOwnerId()
    {
        unset($this->owner_id);
    }

    /**
     * this is for internal use only
     *
     * Generated from protobuf field <code>optional string owner_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_id = $var;

        return $this;
    }

    /**
     * internal use only
     *
     * Generated from protobuf field <code>optional string title = 12;</code>
     * @return string
     */
    public function getTitle()
    {
        return isset($this->title) ? $this->title : '';
    }

    public function hasTitle()
    {
        return isset($this->title);
    }

    public function clearTitle()
    {
        unset($this->title);
    }

    /**
     * internal use only
     *
     * Generated from protobuf field <code>optional string title = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

}

