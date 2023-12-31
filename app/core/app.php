<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
  
    public function __construct()
    {
      // Redirect to 'Home'
      $url = $this->parse_url();
      $path = explode("&", $url[0])[0];
      if (file_exists('app/controllers/' . $path . '.php')) {
        $this->controller = $path;
        unset($url[0]);
      }
      else if ($url[0] == '') {
        $this->controller = 'home';
      }
      else {
        $this->controller = 'error404';
      }
      // else {
      //   $this->controller = 'Error404';
      // }
      
      // Load the controller
      require_once 'app/controllers/' . $this->controller . '.php';
      $this->controller = new $this->controller;
  
      if (isset($url[1])) {
        if (method_exists($this->controller, $url[1])) {
          $this->method = $url[1];
          unset($url[1]);
        }
      }
  
      if ($url) {
        $this->params = array_values($url);
      }
  
      call_user_func_array([$this->controller, $this->method], $this->params);
    }
  
    public function parse_url()
    {
      if (isset($_SERVER['REQUEST_URI'])) {
        $url = rtrim($_SERVER['REQUEST_URI'], '/');
        $url = ltrim($url, 'public/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = ltrim($url, '?');
        $url = explode('/', $url);
        return $url;
      }
    }
  }
  