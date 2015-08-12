<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__.'/../src/RockPaperScissors.php';

    $app = new Silex\Application();
    //$app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    //Main page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('gameselect.html.twig');
    });

    //Playing the computer
    $app->get("/single_player_mode", function() use ($app) {
        return $app['twig']->render('oneplayer.html.twig');
    });

    //Playing your friends or ... enemy
    $app->get("/two_player_mode", function() use ($app) {
        return $app['twig']->render('ropasc.html.twig');
    });

    //Results page, tells you who won
    $app->get("/winner_results", function() use ($app) {
        $new_RockPaperScissors = new RockPaperScissors;
        $player_outcome = $new_RockPaperScissors->play_rockPaperScissors($_GET['player1'], $_GET['player2']);

        return $app['twig']->render('winner_results.html.twig', array('results' => $player_outcome));
    });

    $app->get("/computer_results", function() use ($app) {
        $new_RockPaperScissors = new RockPaperScissors;
        $computer_array = array("rock", "paper", "scissors");
        $outcome = $new_RockPaperScissors->play_rockPaperScissors($_GET['player1'], $computer_array[rand(0, 2)]);

        return $app['twig']->render('winner_results_computer.html.twig', array('results' => $outcome));
    });

    return $app;

 ?>
