<?php
include_once 'Queue.php';

$list=new Queue();
$list->addPatient('w',2010);
$list->addPatient('wizard',2013);
$list->addPatient('ooo',2011);
$list->addPatient('gaim',2014);
$list->addPatient('fourze',2012);
echo '<pre>';
print_r($list->list);
$list->sort();
print_r($list->dequeue());
print_r($list->toString());