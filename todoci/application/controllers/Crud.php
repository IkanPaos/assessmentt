<?php 

class Crud extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
		$this->load->helper('url');
	
	}
	function index(){
		$data['todo'] = $this->M_data->tampil_data()->result();
		$this->load->view('V_tampil',$data);
	}

	function input(){
		$this->load->view('V_input');
	}

	function aksi(){
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$status = $this->input->post('status');

		$data = array(
			'title' => $title,
			'description' => $description,
			'status' => $status
		);
		$this->M_data->input_data($data,'todo');
		redirect('crud/index');
	}
	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->M_data->edit_data($where,'todo')->result();
		$this->load->view('V_edit',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$status = $this->input->post('status');
	
		$data = array(
			'title' => $title,
			'description' => $description,
			'status' => $status
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->M_data->update_data($where,$data,'todo');
		redirect('crud/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->M_data->hapus_data($where,'todo');
		redirect('crud/index');
	}
}