<?php

//var_dump(1);
$dsn = 'mysql:host=back-network;dbname=docker_test';
$username = 'tumi';
$passwd = 'tumi';
$dbh = new PDO($dsn, $username, $passwd);

var_dump($dbh);