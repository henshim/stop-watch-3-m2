<?php


class stopWatch
{
    private $startTime;
    private $endTime;

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return round($this->startTime * 1000);
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return round($this->endTime * 1000);
    }

    function start()
    {
        $this->startTime = microtime(true);
    }

    function stop()
    {
        $this->endTime = microtime(true);
    }

    function getElapsedTime()
    {
        return $this->getEndTime() - $this->getStartTime();
    }
}

$clock = new stopWatch();
$clock->start();
echo 'start clock: ' . $clock->getStartTime() . '<br>';
for ($i = 0; $i < 100000; $i++) {
    echo '';
}
$clock->stop();
echo 'stop clock: ' . $clock->getEndTime() . '<br>';
echo 'thoi gian troi ' . $clock->getElapsedTime() . 'ms <br>';