<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4\Affiliate;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.Affiliate.Accommodation</code>
 */
class Accommodation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string kayak = 1;</code>
     */
    protected $kayak = '';
    /**
     * Generated from protobuf field <code>string booking = 2;</code>
     */
    protected $booking = '';
    /**
     * Generated from protobuf field <code>string tripdotcom = 3;</code>
     */
    protected $tripdotcom = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kayak
     *     @type string $booking
     *     @type string $tripdotcom
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BookmarkTrip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string kayak = 1;</code>
     * @return string
     */
    public function getKayak()
    {
        return $this->kayak;
    }

    /**
     * Generated from protobuf field <code>string kayak = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKayak($var)
    {
        GPBUtil::checkString($var, True);
        $this->kayak = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string booking = 2;</code>
     * @return string
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Generated from protobuf field <code>string booking = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBooking($var)
    {
        GPBUtil::checkString($var, True);
        $this->booking = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tripdotcom = 3;</code>
     * @return string
     */
    public function getTripdotcom()
    {
        return $this->tripdotcom;
    }

    /**
     * Generated from protobuf field <code>string tripdotcom = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTripdotcom($var)
    {
        GPBUtil::checkString($var, True);
        $this->tripdotcom = $var;

        return $this;
    }

}

