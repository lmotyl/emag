<?php

namespace TripSorter\Exception;


class AssigmentNumberEmptyException extends StringIsEmptyException
{

    /**
     * AssigmentNumberEmptyException constructor.
     * @param Throwable|null $previous
     */
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Assigment number is empty', 0, $previous);
    } 
}