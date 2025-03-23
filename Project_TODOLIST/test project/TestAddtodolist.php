<?php

require_once "./Project_TODOLIST/model/todolist.php";
require_once "./Project_TODOLIST/model/business_logic/addtodolist.php";

addTodolist("Eko");
addTodolist("Kadasda");
addTodolist("ikaaa");

var_dump($todoList);