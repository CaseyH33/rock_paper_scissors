<?php

    class RockPaperScissors
    {
        function play_rockPaperScissors($user1, $user2)
        {
            if($user1 == "rock")
            {
                if($user2 == "scissors") {
                    return "Player 1";
                }
                elseif($user2 == "paper") {
                    return "Player 2";
                }
            }
        }
    }
?>
