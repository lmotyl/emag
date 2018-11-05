<?php

namespace TripSorter\Exception;

class FlightNoEmptyException extends StringIsEmptyException
{

    /**     
     * FlightNoEmptyException constructor.
     * 
     * @param Throwable|null $previous
     */
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Flight No is empty', 0, $previous);
    } 
}