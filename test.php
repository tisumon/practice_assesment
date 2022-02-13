<?php

$name = 'BITM';

session_start();

$_SESSION['name'] = $name;


echo "<pre>";
print_r($_SESSION);