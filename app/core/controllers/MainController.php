<?php

function error()
{
    require_once('./views/error.php');
}

function notadmin()
{
    require_once('./views/errorAdmin.php');
}