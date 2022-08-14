<?php


namespace normalStage;
use matchStages\matchStages;

class normalStage extends matchStages {


    public function get_score($player1_score, $player2_score) {

        return $this->scores[$player1_score][$player1_score].'-'. $this->scores[$player2_score];

    }
}