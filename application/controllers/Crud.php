<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
		$this->load->library('form_validation');
                //$this->load->helper('url');
	}
 
	//function index(){
	//	$data['user'] = $this->M_data->tampil_data()->result();
	//	$this->load->view('v_tampil',$data);
	//}

	function index(){
		$data['query'] = $this->M_data->tampil_data();
			// die(var_dump($data));
		$data['konten']='v_tampil';
		$this->load->view('v_tampil1',$data);
	}
	function tambah()
	{	
			//echo var_dump($this->input->post());
			//$this->m_crud->add();
		$submit = $this->input->post('submit');
		if(isset($submit))
		{
			unset($_POST['submit']);
			$this->M_data->tambah($this->input->post());
		}
			//$this->form_add();

			$data['konten']='v_tambah';
			$this->load->view('v_tampil1',$data);	
	}
	function edit($id=null)
	{
		$submit = $this->input->post('submit');
		if(isset($submit))
		{
			unset($_POST['submit']);

			$params['id']= $this->input->post('id');
			$params['nama']=$this->input->post('nama');
			$params['alamat']=$this->input->post('alamat');
			$params['pekerjaan']=$this->input->post('pekerjaan');

			$this->M_data->tambah($params, $this->input->post('id'));
		}

		//die(var_dump($id));
		$arr=array('id'=>$id);
		$data['row'] = $this->M_data->tampil_data($arr);
		$data['konten']='v_edit';
		$this->load->view('v_tampil1',$data);

	}


	function hapus($id){
		$this->M_data->hapus($id);
		redirect('Crud/index');

	}
	function cari(){
		$key = $this->input->post('title');
		$data['query'] = $this->M_data->cari($key);
		$data['konten']='v_tampil';
		$this->load->view('v_tampil1',$data);
	}
	
} 