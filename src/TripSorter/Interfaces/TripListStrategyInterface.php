<?php

namespace TripSorter\Interfaces;

interface TripListStrategyInterface
{

    public function canHandle(BoardCardInterface $boardCard):bool;

    public function handle(BoardCardInterface $boardCard):string;

}