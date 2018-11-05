<?php

namespace TripSorter\Services;

use TripSorter\Interfaces\BoardCardInterface;

class SortService extends AbstractService
{

    public function sort(array $boardCardCollection = null)
    {
        $out = [];
        $bcKey = 0;
        while (count($boardCardCollection) > 0) {
            $bcIndexes = array_keys($boardCardCollection);
            /* @var BoardCardInterface $currentCardBoard */ 
            $currentCardBoard = $boardCardCollection[$bcIndexes[$bcKey]];
            $lastBcIndex = count($bcIndexes) - 1;

            $matchedArrivalIndex = $this->getIndexByArrival($currentCardBoard->getDeparture(), $out);
            if (!is_null($matchedArrivalIndex)) {
                $out = $this->insertAfterIndex($out, $currentCardBoard, $matchedArrivalIndex);
                unset($boardCardCollection[$bcIndexes[$bcKey]]);
                $bcKey = 0;
                continue;
            }
            
            $matchedDepartureIndex = $this->getIndexByDeparture($currentCardBoard->getArrival(), $out);
            if (!is_null($matchedDepartureIndex)) {
                $out = $this->insertBeforeIndex($out, $currentCardBoard, $matchedDepartureIndex);
                unset($boardCardCollection[$bcIndexes[$bcKey]]);
                $bcKey = 0;
                continue;
            }

            if (!count($out)) {
                $out[] = $currentCardBoard;
                unset($boardCardCollection[$bcIndexes[$bcKey]]);
            }
            $bcKey++;

            if ($bcKey > $lastBcIndex) {
                break;
            }
        }
        return $out;
    }

    /**
     * Insert Element into array before pointed index
     *
     * @param array  $collection Array
     * @param mix    $element    Element which insert intro array
     * @param string $index      Index in $collection before which $element should be inserted
     * 
     * @return void
     */
    protected function insertBeforeIndex($collection, $element, $index)
    {
        $out = [];
        $cKeys = array_keys($collection);
        $currentIndexOrder = 0;
        foreach ($collection as $cKey => $el) {
            if ($cKey == $index) {
                $out[] = $element;
            }
            $out[] = $collection[$cKey];
        }
        return $out;
    }

    /**
     * Insert Element into array after pointed index
     *
     * @param array  $collection Array
     * @param mix    $element    Element which insert intro array
     * @param string $index      Index in $collection after which $element should be inserted
     * 
     * @return void
     */
    protected function insertAfterIndex($collection, $element, $index)
    {
        $out = [];
        $cKeys = array_keys($collection);
        $currentIndexOrder = 0;
        foreach ($collection as $cKey => $el) {
            $out[] = $collection[$cKey];
            if ($cKey == $index) {
                $out[] = $element;
            }
        }
        return $out;
    }

    protected function getIndexByArrival($placeName, $collection)
    {
        foreach ($collection as $index => $el) {
            /* @var BoardCardInterface $el */
            if ($placeName == $el->getArrival()) {
                return $index;
            }
        }
    }

    protected function getIndexByDeparture($placeName, $collection)
    {
        foreach ($collection as $index => $el) {
            /* @var BoardCardInterface $el */
            if ($placeName == $el->getDeparture()) {
                return $index;
            }
        }
    }

}