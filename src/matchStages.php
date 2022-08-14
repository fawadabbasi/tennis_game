<?php

namespace matchStages;

abstract class matchStages {
    public $scores = ['love', 'fifteen', 'thirty', 'fourty'];
    abstract public function get_score($player1_score, $player2_score);
}
