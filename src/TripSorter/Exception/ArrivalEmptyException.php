<?php

namespace TripSorter\Exception;


class ArrivalEmptyException extends StringIsEmptyException
{

    /**
     * ArrivalEmptyException constructor.
     * @param Throwable|null $previous
     */
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Arrival name is empty', 0, $previous);
    } 

}