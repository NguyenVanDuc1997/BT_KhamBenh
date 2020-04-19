<?php


interface Editable
{
    public function enqueue($name,$code);
    public function dequeue();
}