<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
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
			$this->M_crud->tambah($this->input->post());
		}
			//$this->form_add();
			$data['konten']='v_tambah';
			$this->load->view('v_tampil1',$data);	
		}
	function edit(){
		$submit= $this->input->post('submit');
		if(isset($submit)){
			unset ($_POST['submit']);
			$params['id']= $this->input->post('id');
			$params['nama']=$this->input->post['nama'];
			$params['alamat']=$this->input->post('alamat');
			$params['pekerjaan']=$this->input->post('pekerjaan');
				$this->M_crud->add($params, $this->input->post('product_id'));
			}

			$arr= array('id' =>$id);
			$data['row'] = $this->M_crud->show($arr);
			$data['konten']='v_tambah';
			$this->load->view('v_tampil1',$data);
		} 
	
} 