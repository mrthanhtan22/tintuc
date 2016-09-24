<?php

class Lienhe extends CI_Controller 
{

	public function index()
	{
		
		 	$this->load->model('static_model');

      
            $lienhe = $this->static_model->get_list();
            $this->data['lienhe'] = $lienhe;

            $this->data['temp'] = 'site/lienhe/index';
            $this->load->view('site/lienhe/layout', $this->data);

	}

}

