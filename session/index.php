<?php


session_start();

$_SESSION['username'] = 'test2';

var_dump($_SESSION);