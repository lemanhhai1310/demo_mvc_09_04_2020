<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Third_controller extends CI_Controller {

    public function __construct(){
    	parent::__construct();
    }

    public function index(){
        $data["title"] = "Trang chủ";
        $data["list_phone"] = array("0947520793","0989172546","0899806685","0778282118","xxx","hai");
        $this->load->view('third_view', $data, FALSE);
	}

}