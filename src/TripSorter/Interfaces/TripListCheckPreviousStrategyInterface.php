<?php

namespace TripSorter\Interfaces;

use TripSorter\Interfaces\BoardCardInterface;


interface TripListCheckPreviousStrategyInterface
{
    public function canHandlePrevious(BoardCardInterface $boardCard):bool;

    public function handleWithPrevious(BoardCardInterface $boardCard, BoardCardInterface $boardCardPrevious):string;


}