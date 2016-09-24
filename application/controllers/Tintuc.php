<?php 
	class Tintuc extends CI_Controller
	{
		
		function index()
    {
        $this->load->model('news_model');
        //lay tong so luong ta ca cac bai vai trong websit
        $input = array();
        $input['where'] =array('catalog_news_id' => 1);
        $total_rows = $this->news_model->get_total($input);

        $this->data['total_rows'] = $total_rows;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac bài viết tren website
        $config['base_url']   = base_url('tintuc/index'); //link hien thi ra danh sach bài viết
        $config['per_page']   = 2;//so luong bài viết hien thi tren 1 trang
        $config['uri_segment'] = 3;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(3);
        $segment = intval($segment);
        
        

        $input['limit'] = array($config['per_page'], $segment);
        
        //lay danh sach bai viet ben phai
         $input1['where'] =array('catalog_news_id' => 1);
         $input1['limit'] = array(5,0);
         $news1= $this->news_model->get_list($input1);
        $this->data['news1'] = $news1;
        
        
        //lay danh sach bai viet
        $news_list = $this->news_model->get_list($input);
        $this->data['news_list'] = $news_list;
       
        //load view
        $this->data['temp'] = 'site/tintuc/index';
        $this->load->view('site/tintuc/layout', $this->data);
    }
    function khuyenmai()
    {
        $this->load->model('news_model');
        //lay tong so luong ta ca cac bai vai trong websit
        $input = array();
        $input['where'] =array('catalog_news_id' => 2);
        $total_rows = $this->news_model->get_total($input);

        $this->data['total_rows'] = $total_rows;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac bài viết tren website
        $config['base_url']   = base_url('tintuc/index'); //link hien thi ra danh sach bài viết
        $config['per_page']   = 5;//so luong bài viết hien thi tren 1 trang
        $config['uri_segment'] = 3;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(3);
        $segment = intval($segment);
        
        

        $input['limit'] = array($config['per_page'], $segment);
        
        
        
        //lay danh sach bai viet
        $news_list = $this->news_model->get_list($input);
        $this->data['news_list'] = $news_list;
       
        //lay danh sach bai viet ben phai
         $input1['where'] =array('catalog_news_id' => 2);
         $input1['limit'] = array(5,0);
         $news1= $this->news_model->get_list($input1);
        $this->data['news1'] = $news1;
        
        //load view
        $this->data['temp'] = 'site/khuyenmai/index';
        $this->load->view('site/khuyenmai/layout', $this->data);
    }
    function view($id){
            
            $this->load->model('news_model');

            /*$id = $this->uri->segment(3);*/
            $info = $this->news_model->get_info($id);
            $this->data['info'] = $info;

            $input = array(); 
            $news_list = $this->news_model->get_list();
            $this->data['news_list'] = $news_list;

            $this->data['temp'] = 'site/view/index';
            $this->load->view('site/view/layout', $this->data);
            
        }

}
 ?>