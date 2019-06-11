<?php
require_once ('Pipe.php');
require_once ('AlphaWorker.php');
require_once ('BetaWorker.php');
require_once ('OmegaWorker.php');


$pipeline = new Pipe();

$alphaWorker = new AlphaWorker();
$betaWorker = new BetaWorker();
$omegaWorker = new OmegaWorker();

$workUnits = [
    'alpha' => 'task for alpha worker',
    'beta' => 'task for beta worker',
    'omega' => 'task for omega worker, which we now have'
];

$pipeline->registerWorker($alphaWorker);
$pipeline->registerWorker($betaWorker);
$pipeline->registerWorker($omegaWorker);

try {
    $pipeline->work($workUnits);
} catch (Exception $exception) {
    echo $exception->getMessage();
}


