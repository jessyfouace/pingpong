<?php
session_start();
require('config.php');
if (!empty($_SESSION['id'])) {
  session_destroy();
  header('location: index.php');
} else {
  header('location: index.php');
}
?>
