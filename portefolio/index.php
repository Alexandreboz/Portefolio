<?php
$page = $_GET['page'];
$page = htmlspecialchars(filter_input(INPUT_GET,'page'));
include ('template.php');
?>