<?php


interface WorkerInterface
{
    public function supports(string $work);

    public function work(string $workUnit);
}