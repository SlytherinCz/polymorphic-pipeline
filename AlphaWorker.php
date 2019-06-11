<?php
require_once ('WorkerInterface.php');

class AlphaWorker implements WorkerInterface
{

    public function supports(string $work)
    {
        return $work === 'alpha';
    }

    public function work(string $workUnit)
    {
        echo self::class . ' working on ' . $workUnit . PHP_EOL;
    }
}