<?php
class err_404 extends CI_Controller{
function __construct(){
  parent::__construct();
 }

function index(){
  $this->load->view('404');
}

}