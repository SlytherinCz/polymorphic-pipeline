<?php
require_once ('WorkerInterface.php');

class BetaWorker implements WorkerInterface
{

    public function supports(string $work)
    {
        return $work === 'beta';
    }

    public function work(string $workUnit)
    {
        echo self::class . ' working on ' . $workUnit . PHP_EOL;
    }
}