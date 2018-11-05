<?php

namespace TripSorter\DTO\BoardCardDTO;

use TripSorter\Interfaces\BoardCardInterface;

/**
 * Class of Board Card Data Transfer Object
 */
class BoardCardDTO implements BoardCardInterface
{
    /**
     * Departure name
     *
     * @var string
     */
    protected $departure;

    /**
     * Arrival name
     *
     * @var string
     */
    protected $arrival;


    /**
     * Set departure name
     *
     * @param string $departure Departure
     * 
     * @return void
     */
    public function setDeparture(string $departure)
    {
        $this->departure = $departure;
    }

    /**
     * Set arrival name
     *
     * @param string $arrival Arrival
     * 
     * @return void
     */
    public function setArrival(string $arrival)
    {
        $this->arrival = $arrival;
    }

    /**
     * Return departure name
     *
     * @return string
     */
    public function getDeparture(): string
    {
        return $this->departure;    
    }

    /**
     * Return arrival name
     *
     * @return string
     */
    public function getArrival(): string
    {
        return $this->arrival;
    }
   
}