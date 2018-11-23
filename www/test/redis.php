<?php

ini_set('display_errors',1);
$redis = new Redis();
$redis->connect('redis',6379); //容器ip
$redis->set('hello','world');

var_dump($redis->get('hello'));