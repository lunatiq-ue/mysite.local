<?
$visitCounter = 0;
$lastVisit = "";
 
session_start();
$visitCounter = $_SESSION['visitCounter'] += 1;

if(isset($_SESSION['lastVisit']))
$lastVisit = $_SESSION['lastVisit'];

$_SESSION['lastVisit'] = date("Y-m-d H:i:s");
