<?php defined('BASEPATH') or die('No direct script access allowed.');

class welcome extends CI_Controller {
    function index () {
        $this->load->library('session');
        echo 'welcome/index';
        var_dump($this->session->userdata('key'));
    }

}

