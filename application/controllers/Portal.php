<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('twilio');
    }
    
    public function index(){
        $this->twilio->create_channel();
        $this->load->view('portal');
    }
}