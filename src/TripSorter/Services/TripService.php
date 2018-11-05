<?php

namespace TripSorter\Services;

use TripSorter\Strategy\TripListStrategy;
use TripSorter\Strategy\TripAirPlaneStrategy;
use TripSorter\Strategy\TripBusStrategy;
use TripSorter\Strategy\TripTrainStrategy;


class TripService extends AbstractService
{

    public function getList(BoardCardCollectionInterface $boardCardCollection)
    {
        $tripListStrategy = new TripListStrategy(
            [
            TripAirPlaneStrategy::class,
            TripBusStrategy::class,
            TripTrainStrategy::class
            ]
        );

        return $tripListStrategy->getTripList($tripListStrategy);
    }

}