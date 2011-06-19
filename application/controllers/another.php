<?php defined('BASEPATH') or die('No direct script access allowed.');

class another extends CI_Controller {
    function test () {
        $this->load->library('session');
        $this->session->set_userdata('key', 'value');
        echo 'another/test';
    }

}

