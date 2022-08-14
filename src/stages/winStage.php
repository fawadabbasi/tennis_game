<?php


namespace winStage;
use matchStages\matchStages;

class winStage extends matchStages {

    public function get_score($player1_score, $player2_score) {

        if ($player1_score > $player2_score) {
            $score = 'win for Player1';
        }
        else{
            $score = 'win for Player2';
        }
        return $score;
    }
}