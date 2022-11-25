<?php
  require_once '../../model/bootstrap.php';
  use CT275\Project\Category;
  $category = new Category($PDO);
  if (
  $_SERVER['REQUEST_METHOD'] === 'POST'
  && isset($_POST['id'])
  && ($category->find($_POST['id'])) !== null
  ) {
  $category->delete();
  }
  // redirect(BASE_URL_PATH);
