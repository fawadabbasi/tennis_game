<?php
namespace TensisGames;

class Game{

    private $player1_score = 0;
    private $player2_score = 0;
    private $player1_name = '';
    private $player2_name = '';

    public function __construct($player1_name, $player2_name)
    {
        $this->$player1_name = $player1_name;
        $this->$player2_name = $player2_name;
    }

    public function makePoint($playerName)
    {
        if ('player1' == $playerName) {
            $this->player1_score++;
        } else {
            $this->player2_score++;
        }
    }


    public function getScore(){
        $stage = new stageFactory($this->player1_score, $this->player2_score);
        $stage->get_score();
    }
}