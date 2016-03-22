<?php
  include("templates/header.htm");

  //set the default name
  $action = 'index';
  //specify some disallowed paths
  $disallowed_paths = array('header', 'footer');
  if (!empty($_GET['action'])){
    $tmp_action = basename($_GET['action']);
    //if it's not a disallowed path, and if the file exists,
    //update $action
    if(!in_array($tmp_action, $disallowed_paths) &&
    file_exists("templates/{$tmp_action}.htm")){
      $action = $tmp_action;
    }
  }
    //include $action
  include("templates/$action.htm");
  include("templates/footer.htm");
 ?>
