<?php

require 'controller.php';

$pdo = connectToDataBase();

$result = $pdo->prepare('select * from db');

$result->execute();

var_dump($result->fetchAll());
