<?php

class Cms extends Controller {
  public function index() {

    $this->view('navbar/index');
    $this->view('cms/index');
  }
}