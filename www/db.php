<?php

$dsn = 'mysql:host=mysql;dbname=app';
$username = 'app';
$passwd = '123456';
$dbh = new PDO($dsn, $username, $passwd);

var_dump($dbh);