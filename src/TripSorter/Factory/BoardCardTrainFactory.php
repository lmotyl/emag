<?php

namespace TripSorter\Factory;

use TripSorter\Interfaces\BoardCardTrainInterface;
use TripSorter\Exception\TrainNoEmptyException;
use TripSorter\DTO\BoardCardDTO\BoardCardTrainDTO;



class BoardCardTrainFactory extends BoardCardFactory
{

    /**
     * Setting Board Card for AirPlane.
     *
     * @param BoardCardTrainDTO $boardCardTrain  Board Card for trains
     * @param string            $departure       Departure name
     * @param string            $arrival         Arrival name
     * @param string            $assigmentNumber Assigment Number
     * @param string            $trainNo         Train Number
     * 
     * @return BoardCardTrainDTO 
     */
    public function create(
        $boardCardTrain,
        string $departure, 
        string $arrival, 
        string $assigmentNumber = null,
        string $trainNo = null
    ) {
        parent::create($boardCardTrain, $departure, $arrival);
        
        if (!strlen($assigmentNumber)) {
            throw new AssigmentNumberEmptyException();
        }

        if (!strlen($trainNo)) {
            throw new TrainNoEmptyException();
        }

        $boardCardTrain->setAssignmentNumber($assigmentNumber);
        $boardCardTrain->setTrainNo($trainNo);

        return $boardCardTrain;
    }


}