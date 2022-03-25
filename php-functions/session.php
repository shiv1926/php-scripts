<?php
session_start();

$_SESSION['mysession'] = 'session set here';

print_r($_SESSION['mysession']);

?>