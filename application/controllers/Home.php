<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('goodnews'); 
}
	public function index(){
		$data['main_content'] = 'fe/home';
		$data['sermon']=$this->goodnews->sermon_count();
		$data['keephopealive']=$this->goodnews->keephopealive_count();
		$data['keephopealive_count']=$this->goodnews->keephopealive_count	();
		$data['blog']=$this->goodnews->blog_count();
		$this->load->view('fe/includes/template',$data);
	}

	public function homepage(){
		//$data['main_content'] = 'fe/home';
		$data['sermon']=$this->goodnews->sermon_count();
		$data['keephopealive']=$this->goodnews->keephopealive_count();
		$data['keephopealive_count']=$this->goodnews->keephopealive_count	();
		$data['blog']=$this->goodnews->blog_count();
		$this->load->view('fe/home',$data);
	}
		public function blogform(){
		//$data['main_content'] = 'fe/blogform';
		$data['blog']=$this->goodnews->blog();
		$this->load->view('fe/blogform',$data);
	}
		public function keephopealive(){
		//$data['main_content'] = 'fe/keephopealive';
		$data['keephopealive']=$this->goodnews->keephopealive();
		$this->load->view('fe/keephopealive',$data);

	}
		public function sermon(){
		//$data['main_content'] = 'fe/sermon';
		$data['sermon']=$this->goodnews->sermon();
		$this->load->view('fe/sermon',$data);
	}

		public function insert_blog()
	{ 
				   	
		$add_blog = array(
        'blog_title'=>$this->input->post('blog_title'),
        'blog_author'=>$this->input->post('blog_author'),
        'blog_date'=>$this->input->post('blog_date'),
        'blog_image'=>$this->input->post('blog_image'),
        'blog_content'=>$this->input->post('blog_content'),               
         
         );
         $q = $this->goodnews->add_blog($add_blog);         	
          
		if ($q['res'] == true){
			$resp = array('status' => 'SUCCESS','message' => $q['dt']);
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}

	public function insert_sermon()
	{ 
				   	
		$add_sermon = array(
        'sermon_title'=>$this->input->post('sermon_title'),
        'sermon_author'=>$this->input->post('sermon_author'),
        'sermon_date'=>$this->input->post('sermon_date'),
        'sermon_image'=>$this->input->post('sermon_image'),
        'sermon_content'=>$this->input->post('sermon_content'),               
         
         );
         $q = $this->goodnews->add_sermon($add_sermon);         	
          
		if ($q['res'] == true){
			$resp = array('status' => 'SUCCESS','message' => $q['dt']);
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}

	

	public function insert_keephopealive()
	{ 
				   	
		$add_keephopealive = array(
        'keephopealive_title'=>$this->input->post('keephopealive_title'),
        'keephopealive_author'=>$this->input->post('keephopealive_author'),
        'keephopealive_date'=>$this->input->post('keephopealive_date'),
        'keephopealive_image'=>$this->input->post('keephopealive_image'),
        'keephopealive_content'=>$this->input->post('keephopealive_content'),               
         
         );
         $q = $this->goodnews->add_keephopealive($add_keephopealive);         	
          
		if ($q['res'] == true){
			$resp = array('status' => 'SUCCESS','message' => $q['dt']);
		}else{
			$resp = array('status' => 'ERR','message' => $q['dt']);
		}
		echo json_encode($resp);
	}
}


     
			