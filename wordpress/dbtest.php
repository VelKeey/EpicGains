<?php
$mysqli = @new mysqli('127.0.0.1', 'root', '', 'epicgains', 3306); // adjust port
if ($mysqli->connect_errno) {
  die("Connect error: ($mysqli->connect_errno) $mysqli->connect_error");
}
$res = $mysqli->query("SHOW TABLES LIKE 'wp_options'");
var_dump($res && $res->num_rows > 0 ? 'OK: tables visible' : 'Tables not found');
