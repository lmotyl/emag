<?php

namespace TripSorter\Interfaces;

/**
 * Board Card interface
 */
interface BoardCardInterface
{
    /**
     * Set departure name
     *
     * @param string $departure
     * @return void
     */
    public function setDeparture(string $departure);

    /**
     * Set arrival name
     *
     * @param stirng $arrival
     * @return void
     */
    public function setArrival(string $arrival);
    /**
     * Return Departure name
     *
     * @return string
     */
    public function getDeparture():string;

    /**
     * Return Arrival name
     *
     * @return string
     */
    public function getArrival():string;
}