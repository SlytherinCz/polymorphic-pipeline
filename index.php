<?php
require_once ('Pipe.php');
require_once ('AlphaWorker.php');
require_once ('BetaWorker.php');


$pipeline = new Pipe();

$alphaWorker = new AlphaWorker();
$betaWorker = new BetaWorker();

$workUnits = [
    'alpha' => 'task for alpha worker',
    'beta' => 'task for beta worker',
    'omega' => 'task for omega worker, which we don\'t have'
];

$pipeline->registerWorker($alphaWorker);
$pipeline->registerWorker($betaWorker);

try {
    $pipeline->work($workUnits);
} catch (Exception $exception) {
    echo $exception->getMessage();
}


