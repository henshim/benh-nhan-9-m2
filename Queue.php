<?php

include_once 'Patient.php';

class Queue
{
    public $list;

    public function __construct()
    {
        $this->list = array();
    }

    function addPatient($name, $code)
    {
        $patient = new Patient($name, $code);
        array_push($this->list, $patient);
    }

    function sort()
    {
        function compare($a, $b)
        {
            if ($a->code == $b->code) return 1;
            return ($a->code > $b->code) ? 1 : -1;
        }

        usort($this->list, 'compare');
    }

    function dequeue()
    {
        $current = array();
        $result = array_shift($this->list);
        array_push($current, $result);
        return $current;
    }

    function toString()
    {
        return $this->list;
    }
}