<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require(APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class Warung extends REST_Controller
{
    function __construct() {
       parent::__construct();
    }
    
    function index_get()
    {
        $this->response($this->db->get('tb_warung')->result());
    }
    
    function index_post()
    {
        
    }
}
