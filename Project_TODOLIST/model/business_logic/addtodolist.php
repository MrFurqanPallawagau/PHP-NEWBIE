<?php

/**
 * menambah todolist
 */

function addtodolist (string $todo)
{
  global $todolist;

  $number = sizeof($todolist) + 1;

  $todolist[$number] = $todo;
}