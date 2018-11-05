<?php

namespace TripSorter\DTO\BoardCardDTO;

use TripSorter\Interfaces\BoardCardAirPlaneInterface;
use TripSorter\Interfaces\BoardCardInterface;


class BoardCardAirPlaneDTO extends BoardCardDTO implements BoardCardInterface, BoardCardAirPlaneInterface
{
    /**
     * Assigment number
     *
     * @var string
     */
    protected $assigmentNumber;

    /**
     * Gate number
     *
     * @var string
     */
    protected $gateNumber;

    /**
     * Flight No
     *
     * @var string
     */
    protected $flightNo;

    /**
     * Baggage Ticker
     *
     * @var string
     */
    protected $baggageTicket;
    
    
    /**
     * Set assigment number
     *
     * @param string $assigmentNumber Assignment Number
     * 
     * @return void
     */
    public function setAssignmentNumber(string $assigmentNumber)
    {
        $this->assigmentNumber = $assigmentNumber;
    }

    /**
     * Set gate number
     *
     * @param string $gateNumber Gate Number
     * 
     * @return void
     */
    public function setGateNumber(string $gateNumber)
    {
        $this->gateNumber = $gateNumber;
    }


    /**
     * Return assigment number
     *
     * @return string
     */
    public function getAssignmentNumber():string
    {
        return $this->assigmentNumber;
    }

    /**
     * Return Gate Number
     *
     * @return string
     */
    public function getGateNumber():string
    {
        return $this->gateNumber;
    }

    /**
     * Set Baggage Tciket
     * 
     * @param string $baggageTicket Baggage Ticket description
     */
    public function setBaggageTicket(string $baggageTicket = null)
    {
        $this->baggageTicket = $baggageTicket;
    }

    /**
     * Return Baggage Ticker description.
     * 
     * @return string|null
     */
    public function getBaggageTicket()
    {
        return $this->baggageTicket;
    }

    /**
     * Set Flight No
     *
     * @param string $flightNo
     */
    public function setFlightNo(string $flightNo)
    {
        $this->flightNo = $flightNo;
    }

    /**
     * Return Fligh No
     *
     * @return string
     */
    public function getFlightNo():string
    {
        return $this->flightNo;
    }

}