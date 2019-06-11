<?php


class OmegaWorker implements WorkerInterface
{

    public function supports(string $work)
    {
        return $work === 'omega';
    }

    public function work(string $workUnit)
    {
        echo self::class . ' working on ' . $workUnit . PHP_EOL;
    }
}