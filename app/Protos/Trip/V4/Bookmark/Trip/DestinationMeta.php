<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4\Bookmark\Trip;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.Bookmark.Trip.DestinationMeta</code>
 */
class DestinationMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string country = 1;</code>
     */
    protected $country = null;
    /**
     * Generated from protobuf field <code>optional string state = 2;</code>
     */
    protected $state = null;
    /**
     * Generated from protobuf field <code>optional string city = 3;</code>
     */
    protected $city = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country
     *     @type string $state
     *     @type string $city
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BookmarkTrip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string country = 1;</code>
     * @return string
     */
    public function getCountry()
    {
        return isset($this->country) ? $this->country : '';
    }

    public function hasCountry()
    {
        return isset($this->country);
    }

    public function clearCountry()
    {
        unset($this->country);
    }

    /**
     * Generated from protobuf field <code>optional string country = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string state = 2;</code>
     * @return string
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : '';
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * Generated from protobuf field <code>optional string state = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string city = 3;</code>
     * @return string
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : '';
    }

    public function hasCity()
    {
        return isset($this->city);
    }

    public function clearCity()
    {
        unset($this->city);
    }

    /**
     * Generated from protobuf field <code>optional string city = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

}

