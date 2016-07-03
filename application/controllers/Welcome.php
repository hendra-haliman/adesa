<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_BaseController {
//class Welcome extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index($lang_id='en')
	{
		parent::index($lang_id);
		$this->load->view('welcome_message');
	}
}
