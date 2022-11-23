<?php
  require_once '../../model/bootstrap.php';
  use CT275\Project\Tour;
  $tour = new Tour($PDO);
  if (
  $_SERVER['REQUEST_METHOD'] === 'POST'
  && isset($_POST['id'])
  && ($tour->find($_POST['id'])) !== null
  ) {
  $tour->delete();
  }
  redirect(BASE_URL_PATH);
