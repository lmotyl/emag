<?php

namespace TripSorter\Exception;


class DepartureEmptyException extends StringIsEmptyException
{

    /**
     * DepartureEmptyException constructor.
     * @param Throwable|null $previous
     */
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Departure name is empty', 0, $previous);
    } 
}