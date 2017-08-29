<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$dbase = 'module';

$db = new mysqli($host,$user,$pass,$dbase);
if($db->connect_error) {
    echo 'Error!';
}