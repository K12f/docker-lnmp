<?php

//var_dump(1);
$dsn = 'mysql:host=mysql;dbname=test';
$username = 'test';
$passwd = 'test';
$dbh = new PDO($dsn, $username, $passwd);

var_dump($dbh);