<?php
include "Editable.php";
include "Patient.php";

class PriorityQueue implements Editable
{

    public $queue;

    public function __construct()
    {
        $this->queue = [];
    }


    public function enqueue($name, $code)
    {
        $patient = new Patient($name, $code);
        array_push($this->queue, $patient);
        $this->sortQueue();
    }

    public function dequeue()
    {
        $patient = array_shift($this->queue);
        return $patient->name;
    }

    public function sortQueue()
    {
        for ($i = 0; $i < count($this->queue) - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < count($this->queue); $j++) {
                if ($this->queue[$j]->code < $this->queue[$min]->code) {
                    $min = $j;
                }
            }
            $tmp = $this->queue[$i];
            $this->queue[$i] = $this->queue[$min];
            $this->queue[$min] = $tmp;
        }

    }

    public function toString()
    {
        foreach ($this->queue as $patient) {
            echo "$patient->name -  $patient->code " . "<br><br>";
        }
    }
}