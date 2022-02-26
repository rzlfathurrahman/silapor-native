<?php 

  function loadView($view = null,$data = []){
    $file_view =  "../app/view/{$view}.php";

    if(file_exists($file_view)){
      require_once $file_view;
    }else{
      require_once '../app/view/error_404.php';
    }
    
  }


?>