<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login/login');
    }
}

/* End of file Login_controller.php and path \application\controllers\Login_controller.php */
