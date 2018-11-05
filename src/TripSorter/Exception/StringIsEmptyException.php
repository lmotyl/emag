<?php

namespace TripSorter\Exception;

class StringIsEmptyException extends \Exception
{

    /**
     * StringIsEmptyException constructor.
     * @param Throwable|null $previous
     */
    public function __construct($message = 'String is Empty', \Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    } 

}