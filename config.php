<?php
ob_start();
error_reporting(E_ALL);
try
{
  $m    = new Mongo();
  $db   = $m->test;
  $coll = $db->users;
}
catch (MongoConnectionException $e)
{
  die('Error connecting to MongoDB server');
} 
catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
include_once("functions.php");
session_start();
session_register("login");
session_register("password");
session_register("loggedIn");
?>
<pre><?var_dump($_SESSION);var_dump($_POST);?></pre>