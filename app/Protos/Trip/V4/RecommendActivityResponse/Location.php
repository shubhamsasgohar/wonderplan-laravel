<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4\RecommendActivityResponse;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.RecommendActivityResponse.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string address = 2;</code>
     */
    protected $address = '';
    /**
     * Generated from protobuf field <code>double latitude = 3;</code>
     */
    protected $latitude = 0.0;
    /**
     * Generated from protobuf field <code>double longitude = 4;</code>
     */
    protected $longitude = 0.0;
    /**
     * Generated from protobuf field <code>repeated .trip.v4.RecommendActivityResponse.Location.Photo photos = 5;</code>
     */
    private $photos;
    /**
     * Generated from protobuf field <code>optional double rating = 6;</code>
     */
    protected $rating = null;
    /**
     * Generated from protobuf field <code>optional uint32 rating_count = 7;</code>
     */
    protected $rating_count = null;
    /**
     * Generated from protobuf field <code>optional string place_type = 8;</code>
     */
    protected $place_type = null;
    /**
     * Generated from protobuf field <code>optional uint32 location_id = 9;</code>
     */
    protected $location_id = null;
    /**
     * Generated from protobuf field <code>optional string place_id = 10;</code>
     */
    protected $place_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $address
     *     @type float $latitude
     *     @type float $longitude
     *     @type array<\App\Protos\Trip\V4\RecommendActivityResponse\Location\Photo>|\Google\Protobuf\Internal\RepeatedField $photos
     *     @type float $rating
     *     @type int $rating_count
     *     @type string $place_type
     *     @type int $location_id
     *     @type string $place_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BookmarkTrip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address = 2;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double latitude = 3;</code>
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Generated from protobuf field <code>double latitude = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double longitude = 4;</code>
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Generated from protobuf field <code>double longitude = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.RecommendActivityResponse.Location.Photo photos = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.RecommendActivityResponse.Location.Photo photos = 5;</code>
     * @param array<\App\Protos\Trip\V4\RecommendActivityResponse\Location\Photo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhotos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, Location\Photo::class);
        $this->photos = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional double rating = 6;</code>
     * @return float
     */
    public function getRating()
    {
        return isset($this->rating) ? $this->rating : 0.0;
    }

    public function hasRating()
    {
        return isset($this->rating);
    }

    public function clearRating()
    {
        unset($this->rating);
    }

    /**
     * Generated from protobuf field <code>optional double rating = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setRating($var)
    {
        GPBUtil::checkDouble($var);
        $this->rating = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 rating_count = 7;</code>
     * @return int
     */
    public function getRatingCount()
    {
        return isset($this->rating_count) ? $this->rating_count : 0;
    }

    public function hasRatingCount()
    {
        return isset($this->rating_count);
    }

    public function clearRatingCount()
    {
        unset($this->rating_count);
    }

    /**
     * Generated from protobuf field <code>optional uint32 rating_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRatingCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->rating_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string place_type = 8;</code>
     * @return string
     */
    public function getPlaceType()
    {
        return isset($this->place_type) ? $this->place_type : '';
    }

    public function hasPlaceType()
    {
        return isset($this->place_type);
    }

    public function clearPlaceType()
    {
        unset($this->place_type);
    }

    /**
     * Generated from protobuf field <code>optional string place_type = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->place_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 location_id = 9;</code>
     * @return int
     */
    public function getLocationId()
    {
        return isset($this->location_id) ? $this->location_id : 0;
    }

    public function hasLocationId()
    {
        return isset($this->location_id);
    }

    public function clearLocationId()
    {
        unset($this->location_id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 location_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkUint32($var);
        $this->location_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string place_id = 10;</code>
     * @return string
     */
    public function getPlaceId()
    {
        return isset($this->place_id) ? $this->place_id : '';
    }

    public function hasPlaceId()
    {
        return isset($this->place_id);
    }

    public function clearPlaceId()
    {
        unset($this->place_id);
    }

    /**
     * Generated from protobuf field <code>optional string place_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->place_id = $var;

        return $this;
    }

}

