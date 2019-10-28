<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/menu/resource/php/function/deletefnc.php';
    
    $delete = new delete($_GET['id']);
    $delete->deletemenu();
    header("Location: index.php");
  ?>
