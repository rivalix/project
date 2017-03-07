<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

  }

  function index()
  {

  }

  public function create_an_new_user_acount()
  {
      print_r($this->input->post());
  }

}
