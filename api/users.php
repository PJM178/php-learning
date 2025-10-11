<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // allow React to connect

$users = [
  ["id" => 1, "name" => "Alice"],
  ["id" => 2, "name" => "Bob"]
];

echo json_encode($users);
