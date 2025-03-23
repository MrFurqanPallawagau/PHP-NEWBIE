<?php
/**
 * menghapus todolist
 */
function removetodolist(int $number)
{
  global $todolist;

  if ($number > sizeof($todolist)){
    return false;
  }
  
  for ( $i = $number; $i < sizeof($todolist); $i++ )
  


unset($todolist[sizeof($todolist)]);
}
return true;