<?php

namespace TripSorter\Strategy;

use TripSorter\Interfaces\BoardCardInterface;
use TripSorter\Interfaces\BoardCardBusInterface;

class TripBusStrategy extends TripListEntryStrategy
{
    /**
     * If strategy can handle this BoardCard
     *
     * @param BoardCardInterface $boardCard Board Card
     * 
     * @return boolean
     */
    public function canHandle($boardCard):bool
    {
        if ($boardCard instanceof BoardCardBusInterface) {
            return true;
        }

        return false;
    }

    /**
     * Return geanerated string with trip practical information
     *
     * @param BoardCardBusInterface $boardCard Board Card
     * 
     * @return string
     */
    public function handle($boardCard):string
    {
        return 'Take the bus from '. $boardCard->getDeparture().' to '.$boardCard->getArrival();
    }

}