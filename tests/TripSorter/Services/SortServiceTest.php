<?php

/**
 * Testing sort Service
 * 
 * @category SortServiceTest
 * @package  TripSort
 * @author   Lukasz Motyl <motyl.lukasz@wp.pl>
 * 
 */
use PHPUnit\Framework\TestCase;
use TripSorter\Factory\BoardCardAirPlaneFactory;
use TripSorter\Factory\BoardCardTrainFactory;
use TripSorter\Factory\BoardCardFactory;
use TripSorter\DTO\BoardCardDTO\BoardCardAirPlaneDTO;
use TripSorter\DTO\BoardCardDTO\BoardCardTrainDTO;
use TripSorter\DTO\BoardCardDTO\BoardCardBusDTO;
use TripSorter\Services\SortService;
use TripSorter\Strategy\TripListEntryStrategy;
use TripSorter\Strategy\TripAirPlaneStrategy;
use TripSorter\Strategy\TripBusStrategy;
use TripSorter\Strategy\TripTrainStrategy;
use TripSorter\Strategy\TripListStrategy;

/**
 * Undocumented class
 */
class SortServiceTest extends TestCase
{

    public function testSort()
    {
        $boardCardAirPlaneFactory = new BoardCardAirPlaneFactory();
        $boardCardTrainFactory = new BoardCardTrainFactory();
        $boardCardBusFactory = new BoardCardFactory();
        $sortService = new SortService();
        $tripListStrategy = new TripListStrategy(
            [
                TripAirPlaneStrategy::class,
                TripBusStrategy::class,
                TripTrainStrategy::class
            ]
        );

        $collection = [
            $boardCardAirPlaneFactory->create(new BoardCardAirPlaneDTO(), 'Gerona Airport', 'Stockholm', 'SK455', '45B', '3A', '344'),
            $boardCardBusFactory->create(new BoardCardBusDTO(), 'Barcelona', 'Gerona Airport'),
            $boardCardAirPlaneFactory->create(new BoardCardAirPlaneDTO(), 'Stockholm', 'New York JFK', 'SK22', '22', '7B', '344'),
            $boardCardTrainFactory->create(new BoardCardTrainDTO(), 'Madrid', 'Barcelona', '45B', '78A')
        ];
        $collection = $sortService->sort($collection);

        $expected = [
            $boardCardTrainFactory->create(new BoardCardTrainDTO(), 'Madrid', 'Barcelona', '45B', '78A'),
            $boardCardBusFactory->create(new BoardCardBusDTO(), 'Barcelona', 'Gerona Airport'),
            $boardCardAirPlaneFactory->create(new BoardCardAirPlaneDTO(), 'Gerona Airport', 'Stockholm', 'SK455', '45B', '3A', '344'),
            $boardCardAirPlaneFactory->create(new BoardCardAirPlaneDTO(), 'Stockholm', 'New York JFK', 'SK22', '22', '7B', '344')
        ];

        $actualList = $tripListStrategy->getTripList($collection);
        $expectedList = $tripListStrategy->getTripList($expected);

        $this->assertEquals($actualList, $expectedList);
    }

}