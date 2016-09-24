<?php 
	/**
	 * summary
	 */
	class Home extends MY_Controller
	{
	    /**
	     * summary
	     */
	     function index()
	    {
	    	$this->data['temp'] = 'admin/home/index';
	        $this->load->view('admin/main', $this->data);
	    }
	}
 ?>