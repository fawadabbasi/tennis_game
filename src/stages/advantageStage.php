<?php

namespace advantageStage;
use matchStages\matchStages;
class advantageStage extends matchStages {

    /**
     * @param $player1_score
     * @param $player2_score
     * @return bool
     */
    public function get_score($player1_score, $player2_score) {

        if ($player1_score > $player2_score) {
            $score = 'advantage Player1';
        }
        else{
            $score = 'advantage Player2';
        }
        return $score;
    }
}