<?php

require_once "./Project_TODOLIST/model/todolist.php";
require_once "./Project_TODOLIST/model/business_logic/showtodolist.php";
require_once "./Project_TODOLIST/model/business_logic/removetodolist.php";
require_once "./Project_TODOLIST/model/business_logic/addtodolist.php";

addtodolist("fura");
addtodolist("furo");
addtodolist("furu");
addtodolist("furi");
addtodolist("shura");

showtodolist();

removetodolist(3);

showtodolist();
removetodolist(3);

$success = removetodolist(4);
var_dump($success);

showtodolist();