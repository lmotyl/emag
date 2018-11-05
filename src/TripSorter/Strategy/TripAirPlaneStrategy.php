<?php

namespace TripSorter\Strategy;

use TripSorter\Interfaces\BoardCardInterface;
use TripSorter\Interfaces\BoardCardTrainInterface;
use TripSorter\DTO\BoardCardDTO\BoardCardAirPlaneDTO;
use TripSorter\Interfaces\TripListCheckPreviousStrategyInterface;

class TripAirPlaneStrategy extends TripListEntryStrategy 
implements TripListCheckPreviousStrategyInterface
{
    /**
     * If strategy can handle this BoardCard
     *
     * @param BoardCardInterface $boardCard Board Card
     * 
     * @return boolean
     */
    public function canHandle($boardCard):bool
    {
        if ($boardCard instanceof BoardCardAirPlaneDTO) {
            return true;
        }

        return false;
    }

    /**
     * Can handle With Previous
     *
     * @param BoardCardInterface $boardCard Previous Board Card
     * 
     * @return boolean
     */
    public function canHandlePrevious($boardCard): bool
    {
        if ($boardCard instanceof BoardCardAirPlaneDTO) {
            return true;
        }

        return false;
        
    }

  
    /**
     * Return geanerated string with trip practical information
     *
     * @param BoardCardAirPlaneDTO $boardCard Board Card
     * 
     * @return string
     */
    public function handle($boardCard):string
    {
        $out = $this->getSentence($boardCard);
        $out .= $this->getBaggageTicketSentence($boardCard);
        return $out;
    }
    
    /**
     * Handle with previous Board Card
     *
     * @param BoardCardInterface $boardCard         Board Card
     * @param BoardCardInterface $boardCardPrevious Previous Board Card
     * 
     * @return boolean
     */
    public function handleWithPrevious(
        $boardCard,
        $boardCardPrevious
    ):string {
        $out = $this->getSentence($boardCard);
        $out .= $this->getBaggageTicketSentence($boardCard, $boardCardPrevious);
        return $out;
    }
    
    /**
     * Get baggage ticket sentence
     *
     * @param BoardCardAirPlaneDTO $boardCard         Board Card
     * @param BoardCardAirPlaneDTO $boardCardPrevious Previous Board Card of the same type as $boardCard
     * 
     * @return string
     */
    protected function getBaggageTicketSentence(
        BoardCardAirPlaneDTO $boardCard, 
        BoardCardAirPlaneDTO $boardCardPrevious = null
    ):string {
        if ($boardCardPrevious instanceof BoardCardAirPlaneDTO 
            && $boardCard->getBaggageTicket() == $boardCardPrevious->getBaggageTicket()
        ) {
            return 'Baggage will be automatically transferred from your last leg. ';
        } elseif ($boardCard->getBaggageTicket()) {
            return 'Baggage drop at ticket counter '.$boardCard->getBaggageTicket();
        }
        
        return '';
    }

    /**
     * Get sentence
     *
     * @param BoardCardInterface $boardCard Board Card
     * 
     * @return string
     */
    protected function getSentence(BoardCardInterface $boardCard):string
    {
        $out = 'From '.$boardCard->getDeparture().', ';
        $out .= 'take flight '.$boardCard->getFlightNo().' ';
        $out .= 'to '.$boardCard->getArrival().'. ';
        $out .= 'Gate '.$boardCard->getGateNumber().', ';
        $out .= 'seat '.$boardCard->getAssignmentNumber().'. ';

        return $out;
    }
}