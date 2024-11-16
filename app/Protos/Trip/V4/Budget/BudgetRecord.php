<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: bookmark_trip.proto

namespace App\Protos\Trip\V4\Budget;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>trip.v4.Budget.BudgetRecord</code>
 */
class BudgetRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string price_usd = 2;</code>
     */
    protected $price_usd = '';
    /**
     * Generated from protobuf field <code>string note = 3;</code>
     */
    protected $note = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type string $price_usd
     *     @type string $note
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BookmarkTrip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string price_usd = 2;</code>
     * @return string
     */
    public function getPriceUsd()
    {
        return $this->price_usd;
    }

    /**
     * Generated from protobuf field <code>string price_usd = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPriceUsd($var)
    {
        GPBUtil::checkString($var, True);
        $this->price_usd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string note = 3;</code>
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Generated from protobuf field <code>string note = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, True);
        $this->note = $var;

        return $this;
    }

}
