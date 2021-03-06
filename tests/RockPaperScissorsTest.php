<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {   
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "scissors";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 1", $result);
        }

        function test_rock_paper()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "paper";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 2", $result);
        }

        function test_rock_rock()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "rock";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Draw", $result);

        }

        function test_paper_scissors()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "paper";
            $player2 = "scissors";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 2", $result);
        }

        function test_paper_paper()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "paper";
            $player2 = "paper";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Draw", $result);
        }

        function test_paper_rock()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "paper";
            $player2 = "rock";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 1", $result);
        }

        function test_scissors_scissors()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "scissors";
            $player2 = "scissors";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Draw", $result);
        }

        function test_scissors_paper()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "scissors";
            $player2 = "paper";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 1", $result);
        }

        function test_scissors_rock()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "scissors";
            $player2 = "rock";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 2", $result);
        }

        function test_capitalization()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "Paper";
            $player2 = "rOCk";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 1", $result);
        }

        function test_wrong_input_player1()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "taco";
            $player2 = "rock";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Please input either 'Rock', 'Paper', or 'Scissors'", $result);
        }

        function test_wrong_input_player2()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "burrito";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Please input either 'Rock', 'Paper', or 'Scissors'", $result);
        }
    }
?>
