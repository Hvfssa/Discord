<?php

function homepage(){
    require './app/core/views/main/homepage.php';
}
function error()
{
    require_once('./app/core/views/main/error.php');
}

function notadmin()
{
    require_once('./app/core/views/main/errorAdmin.php');
}
