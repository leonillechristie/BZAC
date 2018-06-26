<?php

// Create connection
$mysql = new mysqli("localhost", "root", "","bzac");

// Check connection
if (!$mysql) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}
?>