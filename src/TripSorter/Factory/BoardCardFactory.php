<?php

namespace TripSorter\Factory;

use TripSorter\DTO\BoardCardDTO\BoardCardDTO;
use TripSorter\Exception\DepartureEmptyException;
use TripSorter\Exception\ArrivalEmptyException;
use TripSorter\Interfaces\BoardCardInterface;

class BoardCardFactory
{
    /**
     * Create BoardCardDTO instance
     *
     * @param BoardCardDTO $boardCard Board Card
     * @param string       $departure Departure name
     * @param string       $arrival   Arrival name
     * 
     * @return BoardCardDTO
     */
    public function create($boardCard, string $departure, string $arrival)
    {
        if (!strlen($departure)) {
            throw new DepartureEmptyException();
        }

        if (!strlen($arrival)) {
            throw new ArrivalEmptyException();
        }

        $boardCard->setDeparture($departure);
        $boardCard->setArrival($arrival);

        return $boardCard;
    }
}