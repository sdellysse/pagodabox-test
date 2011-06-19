<?php defined('BASEPATH') or die('No direct script access allowed.');

class another extends CI_Controller {
    function test () {
        $this->load->library('session');
        echo 'another/test';
    }

}

