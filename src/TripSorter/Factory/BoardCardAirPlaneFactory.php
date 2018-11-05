<?php

namespace TripSorter\Factory;

use TripSorter\DTO\BoardCardDTO\BoardCardAirPlaneDTO;
use TripSorter\Interfaces\BoardCardAirPlaneInterface;
use TripSorter\Exception\AssigmentNumberEmptyException;
use TripSorter\Exception\GateNoEmptyException;
use TripSorter\Exception\FlightNoEmptyException;


class BoardCardAirPlaneFactory extends BoardCardFactory
{
    /**
     * Setting Board Card for AirPlane.
     *
     * @param BoardCardAirPlaneDTO $boardCardAirPlane Board Card for Airplane
     * @param string               $departure         Departure name
     * @param string               $arrival           Arrival name
     * @param string               $flightNo          Flight No
     * @param string               $gateNo            Gate Number
     * @param string               $assigmentNumber   Assigment Number
     * @param string               $baggageTicket     Baggage Ticket
     * 
     * @return BoardCardAirPlaneDTO
     */
    public function create(
        $boardCardAirPlane,
        string $departure, 
        string $arrival, 
        string $flightNo = null,
        string $gateNo = null,
        string $assigmentNumber = null,
        string $baggageTicket = null
    ) {
        parent::create($boardCardAirPlane, $departure, $arrival);
        
        if (!strlen($assigmentNumber)) {
            throw new AssigmentNumberEmptyException();
        }

        if (!strlen($gateNo)) {
            throw new GateNoEmptyException();
        }

        if (!strlen($flightNo)) {
            throw new FlightNoEmptyException();
        }

        $boardCardAirPlane->setAssignmentNumber($assigmentNumber);
        $boardCardAirPlane->setGateNumber($gateNo);
        $boardCardAirPlane->setFlightNo($flightNo);
        $boardCardAirPlane->setBaggageTicket($baggageTicket);

        return $boardCardAirPlane;
    }

}