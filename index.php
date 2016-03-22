<?php
  include("templates/header.htm");

  $action = $_GET['action'];
  // sanatise the data to ensure that a user cannot change directories at will
  $action = basename($action);
  include("templates/$action.htm");
  include("templates/footer.htm");
 ?>
