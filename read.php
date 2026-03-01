<?php
include "config.php";

$result = $conn->query("SELECT * FROM users ORDER BY id DESC");
?>
