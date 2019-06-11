<?php


class Pipe
{
    private $workers = [];

    public function registerWorker(WorkerInterface $worker) {
        $this->workers[] = $worker;
    }

    /**
     * @param array $workUnits
     * @throws Exception
     */
    public function work(array $workUnits) {
        foreach ($workUnits as $workUnitKey => $workUnitValue) {
            $this->getWorker($workUnitKey)->work($workUnitValue);
        }
    }

    /**
     * @param string $key
     * @return WorkerInterface
     * @throws Exception
     */
    private function getWorker(string $key): WorkerInterface {
        foreach($this->workers as $worker) {
            if ($worker->supports($key)) {
                return $worker;
            }
        }
        throw new Exception('No worker can work on '. $key);
    }
}