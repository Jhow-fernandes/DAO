<?php

require_once("config.php");

$sql = new Sql();

$results = $sql->select("SELECT * FROM usuarios");

echo json_encode($results);

