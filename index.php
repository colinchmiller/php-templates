<?php
  include("templates/header.htm");

  if (!empty($_GET['action'])){
    $action = $_GET['action'];
    // sanatise the data to ensure that a user cannot change directories at will
    // removes the filename from the directory in the URL
    $action = basename($action);
    include("templates/$action.htm");
  } else {
    include("templates/index.htm");
  }
  include("templates/footer.htm");
 ?>
