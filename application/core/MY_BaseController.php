<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_BaseController extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index($lang_id='en')
	{
		if ($lang_id=='en') 
		{
			$lang_name = 'english';	
		} elseif ($lang_id=='id') 
		{
			$lang_name = 'indonesian';	
		} elseif ($lang_id='kr')
		{
			$lang_name = 'korean';	
		} else
		{
			$lang_id = 'en';
			$lang_name = 'english';	
		}
		
		$this->lang->load($lang_id, $lang_name);
		//$this->load->view('welcome_message'); //put this in the child controllers
	}
}
