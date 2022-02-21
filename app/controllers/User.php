<?php 

class User  
{
  public function index(){
    echo 'Halaman User';
  }
  
  public function profile($name = 'User',$job = 'dev'){
    echo "Hello my name is {$name} and my job is {$job}";
  }
}



?>