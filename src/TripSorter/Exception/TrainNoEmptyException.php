<?php

namespace TripSorter\Exception;

class TrainNoEmptyException extends StringIsEmptyException
{

    /**     
     * TrainNoEmptyException constructor.
     * 
     * @param Throwable|null $previous
     */
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Train No is empty', 0, $previous);
    } 
}