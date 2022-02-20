<?php 

class App  
{ 

  protected $controller = 'Home',
            $method = 'Index',
            $params = [];

  public function __construct()
  {
    // Get parsed url from method parseURL()
    $url = $this->parseURL();

    // Setup Controller
    if(file_exists('../app/controllers/'.$url[0].'.php')){
      $this->controller = $url[0];
      unset($url[0]);
    }

    require_once '../app/controllers/'.$this->controller.'.php';
    $this->controller = new $this->controller;

    // Setup Method
    if(isset($url[1])){
      if(method_exists($this->controller,$url[1])){
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // Setup Params/Data
    if(!empty($url)){
      $this->params = array_values($url);
    }

    call_user_func_array(
      [$this->controller, $this->method], $this->params);
    
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