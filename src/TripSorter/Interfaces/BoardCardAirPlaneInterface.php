<?php

namespace TripSorter\Interfaces;


interface BoardCardAirPlaneInterface
{
    
    /**
     * Set assigment number
     *
     * @param string $assigmentNumber Assignment Number
     * 
     * @return void
     */
    public function setAssignmentNumber(string $assigmentNumber);

    /**
     * Set gate number
     *
     * @param string $gateNumber Gate Number
     * 
     * @return void
     */
    public function setGateNumber(string $gateNumber);

    /**
     * Return assigment Number
     *
     * @return string
     */
    public function getAssignmentNumber():string;

    /**
     * Return gate number
     *
     * @return string
     */
    public function getGateNumber():string;

    /**
     * Set Flight No
     *
     * @param string $flightNo
     */
    public function setFlightNo(string $flightNo);

    /**
     * Return Fligh No
     *
     * @return string
     */
    public function getFlightNo():string;

    /**
     * Set Baggage Tciket
     * 
     * @param string $baggageTicket Baggage Ticket description
     */
    public function setBaggageTicket(string $baggageTicket);

    /**
     * Return Baggage Ticker description.
     * 
     * @return string|null
     */
    public function getBaggageTicket();
}