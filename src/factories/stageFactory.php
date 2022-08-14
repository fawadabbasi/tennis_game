<?php
class stageFactory{
    public function __construct($player1_score, $player2_score) {
        if($player1_score == $player2_score){
            return new \matchStages\drawStage($player1_score, $player2_score);
        }
        elseif ($player1_score < 4 and $player2_score < 4) {
            return new \matchStages\normalStage($player1_score, $player2_score);
        }
        elseif ((abs($player1_score - $player2_score)) == 1){
            return new \matchStages\advantageStage($player1_score, $player2_score);
        }
        else{
            return new \matchStages\winStage($player1_score, $player2_score);
        }
    }
}
