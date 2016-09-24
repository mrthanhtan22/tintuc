<?php 
    class Tdeal extends MY_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('tdeal_model');
        }
        function index(){

            $input = array();
            $list = $this->tdeal_model->get_list($input);
            $this->data['list'] = $list;

            $total = $this->tdeal_model->get_total();
            $this->data['total'] = $total;

            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;

            $this->data['temp'] = 'admin/tdeal/index';
            $this->load->view('admin/main', $this->data);
        }

        function add(){


        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
         $this->form_validation->set_rules('from', 'Nơi đi', 'required');
         $this->form_validation->set_rules('to', 'Nơi đến', 'required');
         $this->form_validation->set_rules('price', 'giá vé', 'required');
            
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $from     = $this->input->post('from');
                $to = $this->input->post('to');
                $price = $this->input->post('price');
                
                
                $data = array(
                    'from'     => $from,
                    'to'       => $to,
                    'price'    => number_format($price)
                );
                if($this->tdeal_model->create($data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('tdeal'));
            }
        }
        
        $this->data['temp'] = 'admin/tdeal/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit(){

        $id = $this->uri->rsegment('3');
        $tdeal = $this->tdeal_model->get_info($id);
        if (!$tdeal) {
            $this->session->flashdata('message','khong ton tai danh muc');
            redirect(admin_url('tdeal'));
        }

        $this->data['tdeal'] = $tdeal;
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
         $this->form_validation->set_rules('from', 'Nơi đi', 'required');
         $this->form_validation->set_rules('to', 'Nơi đến', 'required');
         $this->form_validation->set_rules('price', 'giá vé', 'required');
            
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $from      = $this->input->post('from');
                $to        = $this->input->post('to');
                $price     = $this->input->post('price');
                $price     = str_replace(',', '', $price);
                
                $data = array(
                    'from'     => $from,
                    'to'       => $to,
                    'price'    => number_format($price)
                );
                if($this->tdeal_model->update($id,$data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Sua dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không sua được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('tdeal'));
            }
        }
        
        $this->data['temp'] = 'admin/tdeal/edit';
        $this->load->view('admin/main', $this->data);

    }
    function delete(){
        
        $id = $this->uri->rsegment(3);
        $this->_del($id);
         $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
         redirect(admin_url('tdeal'));
    }
    function delete_all(){

        $ids = $this->input->post('ids');
        foreach ($ids as $id) {
            $this->_del($id);
        }

    }

    private function _del($id){
        $info = $this->tdeal_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message','khong ton tai danh muc');
           redirect(admin_url('tdeal'));         
        }
        
         $this->tdeal_model->delete($id);
        
        
    }
}
 ?>