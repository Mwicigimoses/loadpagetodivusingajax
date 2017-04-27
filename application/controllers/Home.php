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

	function  save(){

		$data=array(

			'article_title'=>$this->input->post('article_title'),
			'article_author'=>$this->input->post('article_author'),
			'article_date'=>$this->input->post('article_date'),
			'article_image'=>$this->input->post('article_image'),
			'article_content'=>$this->input->post('article_content')
			
			);
			//explain to me.
		$q=$this->goodnews->insert_blog($data);
				if($q['res']==true){
					$resp = array('status'=>'SUCCESS','message'=> $q['dt']);		
					//redirect('home/blogform');
					$data['success'] = $q['dt'];
					$data['main_content'] = 'fe/blogform';
					$data['sermon']=$this->goodnews->sermon_count();
					$data['keephopealive']=$this->goodnews->keephopealive_count();
					$data['keephopealive_count']=$this->goodnews->keephopealive_count	();
					$data['blog']=$this->goodnews->blog_count();
					$data['blog']=$this->goodnews->blog();
					$this->load->view('fe/includes/template',$data);

				} 
				else{
					$resp = array('status'=>'ERR','message'=> $q['dt']);
					$data['error'] = $q['dt'];
					$data['main_content'] = 'fe/blogform';
					$data['sermon']=$this->goodnews->sermon_count();
					$data['keephopealive']=$this->goodnews->keephopealive_count();
					$data['keephopealive_count']=$this->goodnews->keephopealive_count	();
					$data['blog']=$this->goodnews->blog_count();
					$data['blog']=$this->goodnews->blog();
					$this->load->view('fe/includes/template',$data);

				}
	}

	function  save_sermon(){

		$data=array(

			'sermon_title'=>$this->input->post('sermon_title'),
			'sermon_author'=>$this->input->post('sermon_author'),
			'sermon_date'=>$this->input->post('sermon_date'),
			'sermon_image'=>$this->input->post('sermon_image'),
			'sermon_content'=>$this->input->post('sermon_content')
			
			);
			//explain to me.
		$q=$this->goodnews->insert_sermon($data);
				if($q['res']==true){
					$resp = array('status'=>'SUCCESS','message'=> $q['dt']);		
					//redirect('home/blogform');
					$data['success'] = $q['dt'];
					$data['main_content'] = 'fe/sermon';
					$data['sermon']=$this->goodnews->sermon_count();
					$data['keephopealive']=$this->goodnews->keephopealive_count();
					$data['keephopealive_count']=$this->goodnews->keephopealive_count	();
					$data['blog']=$this->goodnews->blog_count();
					$data['blog']=$this->goodnews->blog();
					$this->load->view('fe/includes/template',$data);

				} 
				else{
					$resp = array('status'=>'ERR','message'=> $q['dt']);
					$data['error'] = $q['dt'];
					$data['main_content'] = 'fe/sermon';
					$data['sermon']=$this->goodnews->sermon_count();
					$data['keephopealive']=$this->goodnews->keephopealive_count();
					$data['keephopealive_count']=$this->goodnews->keephopealive_count	();
					$data['blog']=$this->goodnews->blog_count();
					$data['blog']=$this->goodnews->blog();
					$this->load->view('fe/includes/template',$data);

				}
	}

		function  save_keephopealive(){

		$data=array(

			'title'=>$this->input->post('title'),
			'author'=>$this->input->post('author'),
			'date'=>$this->input->post('date'),
			'image_location'=>$this->input->post('image_location'),
			'content'=>$this->input->post('content')
			
			);
		
		$q=$this->goodnews->insert_keephopealive($data);
				if($q['res']==true){
					$resp = array('status'=>'SUCCESS','message'=> $q['dt']);		
					//redirect('home/blogform');
					$data['success'] = $q['dt'];
					$data['main_content'] = 'fe/keephopealive';
					$data['keephopealive']=$this->goodnews->keephopealive();
					$this->load->view('fe/includes/template',$data);

				} 
				else{
					$resp = array('status'=>'ERR','message'=> $q['dt']);
					$data['error'] = $q['dt'];
					$data['main_content'] = 'fe/keephopealive';
					$data['keephopealive']=$this->goodnews->keephopealive();
					$this->load->view('fe/includes/template',$data);

				}
	}


}