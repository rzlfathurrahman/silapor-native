<?php 

class App  
{ 

  public function __construct()
  {
    // Logic
    $url = $this->parseURL();
    var_dump($url);
  }

  public function parseURL(){
    if(isset($_GET['url'])){

      // remove '/' at the end of url string
      $url = rtrim($_GET['url'],'/');

      // filter unwanted chars for security
      $url = filter_var($url,FILTER_SANITIZE_URL);

      // splice the string into array (controller,method, and data)
      $url = explode('/',$url);

      // return the parsed url
      return $url;
    }
  }

}
  

?>