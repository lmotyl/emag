<?php 

namespace TripSorter\Interfaces;


interface BoardCardTrainInterface
{
    
    /**
     * Set assigment number
     *
     * @param string $assigmentNumber Assigment Number
     * 
     * @return void
     */
    public function setAssignmentNumber(string $assigmentNumber);

    /**
     * Get assigment number
     *
     * @return string
     */
    public function getAssignmentNumber():string;

    /**
     * Set Train No
     *
     * @param string $trainNo Train No
     * 
     * @return void
     */
    public function setTrainNo(string $trainNo);

    /**
     * Return Train No
     *
     * @return string
     */
    public function getTranNo():string;

}