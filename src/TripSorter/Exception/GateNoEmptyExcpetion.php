<?php

namespace TripSorter\Exception;

class GateNoEmptyException extends StringIsEmptyException
{

    /**     
     * GateNoEmptyException constructor.
     * 
     * @param Throwable|null $previous
     */
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Gate No is empty', 0, $previous);
    } 
}