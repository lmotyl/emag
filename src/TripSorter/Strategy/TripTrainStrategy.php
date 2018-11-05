<?php

namespace TripSorter\Strategy;

use TripSorter\Interfaces\BoardCardInterface;
use TripSorter\Interfaces\BoardCardTrainInterface;
use TripSorter\DTO\BoardCardDTO\BoardCardTrainDTO;

class TripTrainStrategy extends TripListEntryStrategy
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
        if ($boardCard instanceof BoardCardTrainDTO) {
            return true;
        }

        return false;
    }

    /**
     * Return geanerated string with trip practical information
     *
     * @param BoardCardTrainDTO $boardCard Board Card
     * 
     * @return string
     */
    public function handle($boardCard):string
    {
        $out = 'Take train '.$boardCard->getTranNo();
        $out .= ' from '.$boardCard->getDeparture();
        $out .= ' to '.$boardCard->getArrival().'.';
        $out .= ' Sit in seat '.$boardCard->getAssignmentNumber().'.';

        return $out;
    }

}