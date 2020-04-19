<?php
include_once "PriorityQueue.php";

$priority= new PriorityQueue();
$priority->enqueue("Smith",5);
$priority->enqueue("Jones",4);
$priority->enqueue("Fehrenbach",6);
$priority->enqueue("Brown",1);
$priority->enqueue("Ingram",1);

echo $priority->toString();
echo $priority->dequeue();

echo "<br><br>";
echo $priority->toString();

echo $priority->dequeue();
echo "<br><br>";
echo $priority->toString();