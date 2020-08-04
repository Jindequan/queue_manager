<?php

$resource = socket_create(AF_UNIX, SOCK_STREAM, 0);
$res = socket_connect($resource, '127.0.0.1', '9876');

var_dump($resource,$res);die;