<?php

use PHPUnit\Framework\TestCase;
use TripSorter\Factory\BoardCardFactory;
use TripSorter\DTO\BoardCardDTO\BoardCardDTO;

class BoardCardFactoryTest extends TestCase
{

    public function testCreate()
    {
        $boardCardFactory = new BoardCardFactory();

        $this->assertInstanceOf(BoardCardDTO::class, $boardCardFactory->create(new BoardCardDTO(), 'London', 'Berlin'));
    }
}