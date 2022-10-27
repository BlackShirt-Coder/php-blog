<?php
session_start();

function setSession($key,$value){
    $_SESSION[$key]=$value;
}
function getSession($key){
    echo $_SESSION[$key];
}

function checkSession($key){
   return isset($_SESSION[$key]);
}


