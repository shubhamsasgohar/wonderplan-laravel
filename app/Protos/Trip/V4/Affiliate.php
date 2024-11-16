<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.Affiliate</code>
 */
class Affiliate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink flights = 1;</code>
     */
    private $flights;
    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink accommodations = 2;</code>
     */
    private $accommodations;
    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink car_rentals = 3;</code>
     */
    private $car_rentals;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\App\Protos\Trip\V4\AffiliateLink>|\Google\Protobuf\Internal\RepeatedField $flights
     *     @type array<\App\Protos\Trip\V4\AffiliateLink>|\Google\Protobuf\Internal\RepeatedField $accommodations
     *     @type array<\App\Protos\Trip\V4\AffiliateLink>|\Google\Protobuf\Internal\RepeatedField $car_rentals
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BookmarkTrip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink flights = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFlights()
    {
        return $this->flights;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink flights = 1;</code>
     * @param array<\App\Protos\Trip\V4\AffiliateLink>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFlights($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Protos\Trip\V4\AffiliateLink::class);
        $this->flights = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink accommodations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccommodations()
    {
        return $this->accommodations;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink accommodations = 2;</code>
     * @param array<\App\Protos\Trip\V4\AffiliateLink>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccommodations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Protos\Trip\V4\AffiliateLink::class);
        $this->accommodations = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink car_rentals = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCarRentals()
    {
        return $this->car_rentals;
    }

    /**
     * Generated from protobuf field <code>repeated .trip.v4.AffiliateLink car_rentals = 3;</code>
     * @param array<\App\Protos\Trip\V4\AffiliateLink>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCarRentals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Protos\Trip\V4\AffiliateLink::class);
        $this->car_rentals = $arr;

        return $this;
    }

}

