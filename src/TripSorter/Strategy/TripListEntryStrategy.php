<?php

namespace TripSorter\Strategy;

use TripSorter\Interfaces\TripListStrategyInterface;
use TripSorter\DTO\BoardCardDTO\BoardCardDTO;

class TripListEntryStrategy implements TripListStrategyInterface
{
    /**
     * If strategy can handle this BoardCard
     *
     * @param BoardCardDTO $boardCard Board Card
     * 
     * @return boolean
     */
    public function canHandle($boardCard):bool
    {
        if ($boardCard instanceof BoardCardDTO) {
            return true;
        }

        return false;
    }

    /**
     * Return geanerated string with trip practical information
     *
     * @param BoardCardInterface $boardCard Board Card
     * 
     * @return string
     */
    public function handle($boardCard):string
    {
        return $boardCard->getDeparture().' - '.$boardCard->getArrival();
    }

}