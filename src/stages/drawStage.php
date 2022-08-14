<?php
namespace drawStage;
use matchStages\matchStages;

class drawStage extends matchStages {

    public function get_score($player1_score, $player2_score)
    {
        if(player1_score != $player2_score) return;

        if ($player1_score == 3 or player1_score == 4 ) {
            $score = 'Deuce';
        }
        else{
            $score = $this->scores[$player1_score]. '-All';
        }
        return $score;
    }
}