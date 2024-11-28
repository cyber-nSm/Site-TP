<?php
$employeesStatement = $mysqlClient->prepare('SELECT * FROM projects');
$employeesStatement->execute();
$projects = $employeesStatement->fetchAll();