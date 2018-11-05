<?php

namespace TripSorter\DTO\BoardCardDTO;

use TripSorter\Interfaces\BoardCardTrainInterface;


class BoardCardTrainDTO extends BoardCardDTO implements BoardCardTrainInterface
{
    /**
     * Assigment Number
     *
     * @var string
     */
    protected $assigmentNumber;

    /**
     * Train No
     *
     * @var string
     */
    protected $trainNo;

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
     * Return assigment number
     *
     * @return string
     */
    public function getAssignmentNumber():string
    {
        return $this->assigmentNumber;
    }

    /**
     * Set Train No
     *
     * @param string $trainNo Train No
     * 
     * @return void
     */
    public function setTrainNo(string $trainNo)
    {
        $this->trainNo = $trainNo;
    }

    /**
     * Return Train No
     *
     * @return string
     */
    public function getTranNo():string
    {
        return $this->trainNo;
    }

}