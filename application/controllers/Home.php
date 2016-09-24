<?php 
	class Home extends CI_Controller
	{
		
		public function index()
		{	
			/*lay ve khuen mai*/
			$this->load->model('tdeal_model');
			$tdeal_list = $this->tdeal_model->get_list();
			$this->data['tdeal_list'] = $tdeal_list;

			/*lay slide*/
			$this->load->model('slide_model');
			$slide_list = $this->slide_model->get_list();
			$this->data['slide_list'] = $slide_list;

			/* lay tin tuc*/
			$this->load->model('news_model');
			$news_list = $this->news_model->get_list();
			$this->data['news_list'] = $news_list;

			$data = array();
			$data['temp'] = 'site/home/index';
			$this->load->view('site/layout',$data);

		}
	}
 ?>