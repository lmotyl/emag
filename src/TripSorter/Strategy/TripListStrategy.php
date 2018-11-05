<?php

namespace TripSorter\Strategy;

use TripSorter\Interfaces\TripListCheckPreviousStrategyInterface;


class TripListStrategy
{
    /**
     * Undocumented variable
     *
     * @var TripListEntryStrategy[]
     */
    protected $strategies;

    /**
     * Trip List Strategy Constructor
     *
     * @param array $strategyClassNames Name of classes which are instance of Trip List Entry Strategies
     */
    public function __construct(array $strategyClassNames)
    {
        foreach ($strategyClassNames as $strategyClassName) {
            $this->strategies[] = new $strategyClassName();
        }
    }

    /**
     * Get Trip List
     *
     * @param array $boardCardList $board Card List
     * 
     * @return void
     */
    public function getTripList(array $boardCardList)
    {
        $out = [];
        $boardListIndexes = array_keys($boardCardList);

        foreach ($boardListIndexes as $k => $boardIndex) {
            foreach ($this->strategies as $strategy) {
                if ($strategy->canHandle($boardCardList[$boardIndex])) {
                    if ($strategy instanceof TripListCheckPreviousStrategyInterface
                        && isset($boardCardList[$boardListIndexes[$k - 1]])
                        && $strategy->canHandlePrevious($boardCardList[$boardListIndexes[$k - 1]])
                    ) {
                        $out[] = $strategy->handleWithPrevious(
                            $boardCardList[$boardIndex],
                            $boardCardList[$boardListIndexes[$k - 1]]
                        );
                    } else {
                        $out[] = $strategy->handle($boardCardList[$boardIndex]);
                    }
                }
            }
        }

        return $out;
    }

}