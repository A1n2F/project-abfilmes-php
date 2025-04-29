<?php

$id = $_REQUEST['id'];

$db = new DB;
$filme = $db->filme($id);

view('filme', compact('filme'));
?>