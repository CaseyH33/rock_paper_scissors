<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__.'/../src/RockPaperScissors.php';

    $app = new Silex\Application();
    //$app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('ropasc.html.twig');
    });

    $app->get("/winner_results", function() use ($app) {
        $new_RockPaperScissors = new RockPaperScissors;
        $player_outcome = $new_RockPaperScissors->play_rockPaperScissors($_GET['player1'], $_GET['player2']);

        return $app['twig']->render('winner_results.html.twig', array('results' => $player_outcome));
    });

    return $app;

 ?>
