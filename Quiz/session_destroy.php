<?php
session_destroy();
$question=array();
$question['session']="session";
$q=json_encode($question);
echo $q;;
?>