<?php

    class RockPaperScissors
    {
        function play_rockPaperScissors($user1, $user2)
        {
            //Converts user inputs to lowercase
            $user1 = strtolower($user1);
            $user2 = strtolower($user2);

            // Verifies users input rock, paper, or scissors
            if((($user1 == "rock") || ($user1 == "paper") || ($user1 == "scissors")) &&
            (($user2 == "rock") || ($user2 == "paper") || ($user2 == "scissors")))
            {
                //User 1 inputs rock and returns outcome dependent on User 2s input
                if($user1 == "rock")
                {
                    if($user2 == "scissors") {
                        return "Player 1";
                    } elseif($user2 == "paper") {
                        return "Player 2";
                    } else {
                        return "Draw";
                    }
                }

                //User 1 inputs paper and returns outcome dependent on User 2s input
                elseif($user1 == "paper")
                {
                    if($user2 == "scissors") {
                        return "Player 2";
                    } elseif($user2 == "paper") {
                        return "Draw";
                    } else {
                        return "Player 1";
                    }
                }

                //User 1 inputs scissors and returns outcome dependent on User 2s input
                else {
                    if($user2 == "scissors") {
                        return "Draw";
                    } elseif($user2 == "paper") {
                        return "Player 1";
                    } else {
                        return "Player 2";
                    }
                }
            }

            //Returns an error message if either user inputs enter something besides
            //rock, paper, or scissors
            else {
                return "Please input either 'Rock', 'Paper', or 'Scissors'";
            }
        }
    }
?>
