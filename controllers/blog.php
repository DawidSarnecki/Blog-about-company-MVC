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
	
	/*

	protected function AddComment(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'user');
		}
		elseif ($_SESSION['is_logged_in'])
		{
			$viewmodel = new BlogModel();
			$this->returnView($viewmodel->add(), true);
		}
		
	}
	*/
	
	protected function addcomment($itemId){
		if(!isset($_SESSION['logged_in'])){
			header('Location: '.ROOT_URL.'user/login');
		}
			$viewmodel = new BlogModel();
			$this->returnView($viewmodel->addComment($itemId), true);
	}
	
	
		protected function add(){
			$viewmodel = new BlogModel();
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		
		if($post['submit']){
			
			$title = $post['title'];
			$body = $post['body'];
			$user_id = $_SESSION['ID'];
			//echo $user_id = $_SESSION['ID'];
			
			$connect->query('INSERT INTO blogtext (Title, Text, X_CreateUser) VALUES (:title, :body, :user)');
			$connect->bindValue(':title', $title);
			$connect->bindValue(':body', $body);
			$connect->bindValue(':user', $user_id);
			$connect->execute();
		
			
			// Verify
			if($this->lastInsertId())
			{
				// Redirect
				//header('Location: '.ROOT_URL.'users/login');
				echo "działa lastinsert";	
			}
		}
			$this->returnView($viewmodel->add(), true);
	}
	
}
