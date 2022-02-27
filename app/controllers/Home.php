<?php 
class Home
{
  public function index() {
    loadView('layouts/header',[
      'title' => 'Dashboard'
    ]);
    loadView('index');
    loadView('layouts/footer');
  }
}


?>