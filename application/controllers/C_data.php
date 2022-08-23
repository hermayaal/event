<?php 

class C_data extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}

	function index(){
		$this->load->view('welcome_message');
	}

	function tampil_data_admin(){
		$dataadmin= $this->m_data->tampil_data("tb_user")->result();
		$data = array
		(
			'datamu' => $dataadmin
		);
		$this->load->view('v_tampil_data_admin',$data);
	}

	function input_data_admin(){
		$this->load->view('v_input_data_admin');
	}

	function tambah_admin(){
		$data = array(
			'username' => $this->input->post('username'),
			'nama_user' => $this->input->post('nama_user'),
			'password' => $this->input->post('password')
		);

		$this->m_data->masuk_data($data, 'tb_user');
		redirect('c_data/tampil_data_admin');
	}

	function edit_admin($no_id){
		$where = array('no_id' => $no_id);
		$data['admin'] = $this->m_data->edit_data($where,'tb_user')->result();
		$this->load->view('v_edit_data_admin',$data);
	}

	function update_admin(){
		$no_id = $this->input->post('no_id');
		$username = $this->input->post('username');
		$nama_user = $this->input->post('nama_user');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'nama_user' => $nama_user,
			'password' => $password
		);

		$where = array(
			'no_id' => $no_id
		);
		
		$this->m_data->update_data($where,$data,'tb_user');
		redirect('c_data/tampil_data_admin');
	}

	function hapus_admin($no_id){
		$where = array('no_id' => $no_id);
		$this->m_data->hapus_data($where,'tb_user');
		redirect('c_data/tampil_data_admin');
	}
}