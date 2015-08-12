<?php

    class RockPaperScissors
    {
        function play_rockPaperScissors($user1, $user2)
        {
            $user1 = strtolower($user1);
            $user2 = strtolower($user2);

            if((($user1 == "rock") || ($user1 == "paper") || ($user1 == "scissors")) &&
            (($user2 == "rock") || ($user2 == "paper") || ($user2 == "scissors")))
            {
                if($user1 == "rock")
                {
                    if($user2 == "scissors") {
                        return "Player 1";
                    }
                    elseif($user2 == "paper") {
                        return "Player 2";
                    }
                    else {
                        return "Draw";
                    }
                }
                elseif($user1 == "paper")
                {
                    if($user2 == "scissors") {
                        return "Player 2";
                    } elseif($user2 == "paper") {
                        return "Draw";
                    } else {
                        return "Player 1";
                    }
                } else {
                    if($user2 == "scissors") {
                        return "Draw";
                    } elseif($user2 == "paper") {
                        return "Player 1";
                    } else {
                        return "Player 2";
                    }

                }
            } else {
                return "Please input either 'Rock', 'Paper', or 'Scissors'";
            }
        }
    }
?>
