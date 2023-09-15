<?php

function homepage(){
    require './app/core/views/main/homepage.php';
}
function error()
{
    require_once('./app/core/views/error.php');
}

function notadmin()
{
    require_once('./app/core/views/errorAdmin.php');
}
