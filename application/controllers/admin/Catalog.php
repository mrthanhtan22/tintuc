<?php 
	class Catalog extends MY_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('catalog_model');
		}
		function index(){

			$input = array();
	    	$list = $this->catalog_model->get_list($input);
	    	$this->data['list'] = $list;

	    	$total = $this->catalog_model->get_total();
	    	$this->data['total'] = $total;

            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;

			$this->data['temp'] = 'admin/catalog/index';
			$this->load->view('admin/main', $this->data);
		}

		function add(){


        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
         $this->form_validation->set_rules('name', 'Tên', 'required');
            
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name     = $this->input->post('name');
                $parent_id = $this->input->post('parent_id');
                $sort_order = $this->input->post('sort_order');
                
                $data = array(
                    'name'     => $name,
                    'parent_id' => $parent_id,
                    'sort_order' => intval($sort_order)
                );
                if($this->catalog_model->create($data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('catalog'));
            }
        }

        $input = array();
        $input['where'] = array('parent_id' => 0);
        $list = $this->catalog_model->get_list($input);
        $this->data['list'] = $list;
        
        $this->data['temp'] = 'admin/catalog/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit(){


        $this->load->library('form_validation');
        $this->load->helper('form');

        $id = $this->uri->rsegment(3);
       	$info = $this->catalog_model->get_info($id);
       	if (!$info) {
       		$this->session->flashdata('message','khong ton tai danh muc');
       		redirect(admin_url('catalog'));
       	}

       	$this->data['info'] = $info;
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
         $this->form_validation->set_rules('name', 'Tên', 'required');
            
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name     = $this->input->post('name');
                $parent_id = $this->input->post('parent_id');
                $sort_order = $this->input->post('sort_order');
                
                $data = array(
                    'name'     => $name,
                    'parent_id' => $parent_id,
                    'sort_order' => intval($sort_order)
                );
                if($this->catalog_model->update($id,$data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Chỉnh sửa dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Chỉnh sửa thất bại');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('catalog'));
            }
        }

        $input = array();
        $input['where'] = array('parent_id' => 0);
        $list = $this->catalog_model->get_list($input);
        $this->data['list'] = $list;
        
        $this->data['temp'] = 'admin/catalog/edit';
        $this->load->view('admin/main', $this->data);

    }
    function delete(){
    	
        $id = $this->uri->rsegment(3);
       	$this->_del($id);
       	 $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
       	 redirect(admin_url('catalog'));
    }
    function delete_all(){

        $ids = $this->input->post('ids');
        foreach ($ids as $id) {
            $this->_del($id, false);
        }
        


    }

    private function _del($id){
        $info = $this->catalog_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message','khong ton tai danh muc');
           if($rediect)
            {
                redirect(admin_url('catalog'));
            }else{
                return false;
            }
        }
        $this->load->model('product_model');
        $product = $this->product_model->get_info_rule(array('catalog_id'=> $id), 'id');
        if ($product) {
            $this->session->set_flashdata('message','Danh mục '.$info->name.' xóa có chứa sản phẩm, phải xóa sản phẩm trước');
            if($rediect)
            {
                redirect(admin_url('catalog'));
            }else{
                return false;
            }
        }

         $this->catalog_model->delete($id);
        
        
    }
}
 ?>