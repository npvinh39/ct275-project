<?php
  session_start();
  unset($_SESSION['user']);
  header('Location: ../view/admin/login.php');
  exit();