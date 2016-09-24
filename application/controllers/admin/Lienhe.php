<?php


class Lienhe extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('static_model');
	}

	public function index()
	{

		$lienhe = $this->news_model->get_list();
        $this->data['lienhe'] = $lienhe;


        
		//load view
        $this->data['temp'] = 'admin/lienhe/index';
        $this->load->view('admin/main', $this->data);
	}

}
