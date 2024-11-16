<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Protos\Trip\V4;

/**
 */
class TripServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \App\Protos\Trip\V4\GetTripStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTripStatus(\App\Protos\Trip\V4\GetTripStatusRequest $argument,
                                                                           $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/GetTripStatus',
        $argument,
        ['\App\Protos\Trip\V4\TripStatus', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\PlanAsyncRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PlanAsync(\App\Protos\Trip\V4\PlanAsyncRequest $argument,
                                                                   $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/PlanAsync',
        $argument,
        ['\App\Protos\Trip\V4\PlanAsyncResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\GetPlanAsyncRequestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPlanAsyncRequest(\App\Protos\Trip\V4\GetPlanAsyncRequestRequest $argument,
                                                                                       $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/GetPlanAsyncRequest',
        $argument,
        ['\App\Protos\Trip\V4\PlanAsyncRequest', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\GetTripRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTrip(\App\Protos\Trip\V4\GetTripRequest $argument,
                                                               $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/GetTrip',
        $argument,
        ['\App\Protos\Trip\V4\Trip', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\GetTripDayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTripDayBlocking(\App\Protos\Trip\V4\GetTripDayRequest $argument,
                                                                             $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/GetTripDayBlocking',
        $argument,
        ['\App\Protos\Trip\V4\TripDay', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\GetTripBudgetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTripBudgetBlocking(\App\Protos\Trip\V4\GetTripBudgetRequest $argument,
                                                                                   $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/GetTripBudgetBlocking',
        $argument,
        ['\App\Protos\Trip\V4\Budget', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\GetTripAffiliateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTripAffiliateBlocking(\App\Protos\Trip\V4\GetTripAffiliateRequest $argument,
                                                                                         $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/GetTripAffiliateBlocking',
        $argument,
        ['\App\Protos\Trip\V4\Affiliate', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\GetHotelRecommendationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetHotelRecommendationBlocking(\App\Protos\Trip\V4\GetHotelRecommendationRequest $argument,
                                                                                                     $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/GetHotelRecommendationBlocking',
        $argument,
        ['\App\Protos\Trip\V4\HotelRecommendation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\SearchRecommendActivityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SearchRecommendActivity(\App\Protos\Trip\V4\SearchRecommendActivityRequest $argument,
                                                                                               $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/SearchRecommendActivity',
        $argument,
        ['\App\Protos\Trip\V4\RecommendActivityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\RecommendActivityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RecommendActivity(\App\Protos\Trip\V4\RecommendActivityRequest $argument,
                                                                                   $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/RecommendActivity',
        $argument,
        ['\App\Protos\Trip\V4\RecommendActivityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\AddTripDayActivityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddTripDayActivity(\App\Protos\Trip\V4\AddTripDayActivityRequest $argument,
                                                                                     $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/AddTripDayActivity',
        $argument,
        ['\App\Protos\Trip\V4\Activity', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\DeleteTripDayActivityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTripDayActivity(\App\Protos\Trip\V4\DeleteTripDayActivityRequest $argument,
                                                                                           $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/DeleteTripDayActivity',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\ReoderTripRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReorderTrip(\App\Protos\Trip\V4\ReoderTripRequest $argument,
                                                                      $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/ReorderTrip',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\AddBookmarkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddBookmark(\App\Protos\Trip\V4\AddBookmarkRequest $argument,
                                                                       $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/AddBookmark',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\RemoveBookmarkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveBookmark(\App\Protos\Trip\V4\RemoveBookmarkRequest $argument,
                                                                             $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/RemoveBookmark',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\CloneTripRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CloneTrip(\App\Protos\Trip\V4\CloneTripRequest $argument,
                                                                   $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/CloneTrip',
        $argument,
        ['\App\Protos\Trip\V4\CloneTripResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\UpdateVisibilityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateVisibility(\App\Protos\Trip\V4\UpdateVisibilityRequest $argument,
                                                                                 $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/UpdateVisibility',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\UpdateTripRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateTrip(\App\Protos\Trip\V4\UpdateTripRequest $argument,
                                                                     $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/UpdateTrip',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\GetBookmarkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBookmark(\App\Protos\Trip\V4\GetBookmarkRequest $argument,
                                                                       $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/GetBookmark',
        $argument,
        ['\App\Protos\Trip\V4\Bookmark', 'decode'],
        $metadata, $options);
    }

    /**
     * PlanSync is only used internally
     * @param \App\Protos\Trip\V4\PlanSyncRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PlanSync(\App\Protos\Trip\V4\PlanSyncRequest $argument,
                                                                 $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/PlanSync',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * SaveTripDay is only used internally
     * @param \App\Protos\Trip\V4\SaveTripDayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SaveTripDay(\App\Protos\Trip\V4\SaveTripDayRequest $argument,
                                                                       $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/SaveTripDay',
        $argument,
        ['\App\Protos\Trip\V4\TripDay', 'decode'],
        $metadata, $options);
    }

    /**
     * SaveBudget is only used internally
     * @param \App\Protos\Trip\V4\SaveBudgetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SaveBudget(\App\Protos\Trip\V4\SaveBudgetRequest $argument,
                                                                     $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/SaveBudget',
        $argument,
        ['\App\Protos\Trip\V4\Budget', 'decode'],
        $metadata, $options);
    }

    /**
     * SaveTrip is only used internally
     * @param \App\Protos\Trip\V4\SaveTripRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SaveTrip(\App\Protos\Trip\V4\SaveTripRequest $argument,
                                                                 $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/SaveTrip',
        $argument,
        ['\App\Protos\Trip\V4\Trip', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Protos\Trip\V4\TriggerGenerateSitemapRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TriggerGenerateSitemap(\App\Protos\Trip\V4\TriggerGenerateSitemapRequest $argument,
                                                                                             $metadata = [], $options = []) {
        return $this->_simpleRequest('/trip.v4.TripService/TriggerGenerateSitemap',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
