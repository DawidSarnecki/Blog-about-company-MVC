<?php
/*********************************************************** 
* Class name:
*    Blog
* Descripton:
*    Extends Controller
**********************************************************/
class Blog extends Controller
{
	
	/*********************************************************** 
	* Protected members
	************************************************************/  
	protected function Index(){
		$viewmodel = new BlogModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
	
	protected function addcomment(){
		if(!isset($_SESSION['logged_in'])){
			header('Location: '.ROOT_URL.'user/login');
		}
		
		$viewmodel = new BlogModel();
		
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		
		//var_dump($post);
		
		if($post['postId']){
			
			$this->returnView($viewmodel->addComment($post['postId']), true);
		}
		
		if($post['submit']){
			$viewmodel->insertComment($post);
			header('Location: '.ROOT_URL.'blog');
		
		}

	}
			
	
	protected function add(){
		$viewmodel = new BlogModel();
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		
		if($post['submit']){
			
			$viewmodel->insert($post);
			header('Location: '.ROOT_URL.'blog');
		}
			$this->returnView($viewmodel->add(), true);
	}
	
	protected function archive(){
		$viewmodel = new BlogModel();
		$this->returnView($viewmodel->archive(), true);
	}
	
}
