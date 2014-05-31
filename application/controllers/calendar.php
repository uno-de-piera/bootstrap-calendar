<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller 
{

	public function index()
	{
		$this->load->view('calendar');
	}

}

/* End of file calendar.php */
/* Location: ./application/controllers/calendar.php */