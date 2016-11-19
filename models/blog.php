<?php
/*********************************************************** 
* Class name:
*    BlogModel
* Descripton:
*    extends Model abstract class
**********************************************************/

class BlogModel extends Model
{
	/*********************************************************** 
	* Public members
	************************************************************/ 
	
		public function Index(){
		$this->query('SELECT * FROM blog_public');
		$rows = $this->resultSet();
		//print_r($rows);
		
		$data  = array();

		foreach ($rows as $row){
			$post = new Post($row['Title'], $row['Status'], $row['Login'], $row['Text'], $row['X_UpdateTime'],
			$row['X_RemoveTime'], $row['X_CreateUser'],$row['blogtext_id']);
			
				$this->query('SELECT * FROM all_comments WHERE BlogItemID = :blog_id');			
				$this->bindValue(':blog_id', $row['blogtext_id']);
				$comments = $this->resultset();
				$dataComments  = array();
				
					if ($comments){
						foreach ($comments as $row){
							$dataComments[] = new Comment($row['ID'], $row['Login'], $row['Text'], $row['Time']);
						}
						//var_dump($dataComments);
						$post->setCommnets($dataComments);
					}
					$data[] = $post;
		}	
		//var_dump($data);
		return $data;
		}

	
	/*********************************************************** 
	* Public members
	************************************************************/ 

	public function addComment($itmeId)
	{
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
		return;
	}
	
	
	public function add()
	{
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
		return;
	}
	
	

}

/*
	class Collection
	{
		public $items = array();

		public function addItem($obj) 
		{
		 $this->items[] = $obj;
		}
	}
		
		*/
	/*

		not working: ---------------------------------------

	$this->query('SELECT * FROM all_comments WHERE BlogItemID = :blog_id');			
				$this->bindValue(':blog_id', $row['blogtext_id']);
				$comments = $this->resultset();
				$dataComments  = array();
				
					if ($comments){
						
						foreach ($comments as $row){
							$dataComments[] =(new Comment($row['ID'], $row['Login'], $row['Text'], $row['Time']));
						}
						//print_r($posts->items);
						var_dump($dataComments)
						//return $dataComments;
					}
					else return false;


		working: ---------------------------------------
				public function Index(){
		$this->query('SELECT * FROM blog_public');
		$rows = $this->resultSet();
		//print_r($rows);
		
		$data = new Collection();
		
		foreach ($rows as $row){
		$data->addItem(new Post($row['Title'], $row['Status'], $row['Login'], $row['Text'], $row['X_UpdateTime'],row['X_RemoveTime'], $row['X_CreateUser'],$row['blogtext_id']));
	
		//print_r($posts->items);
		
		}
		//print_r($posts->items);
		return $data->items;
		
		-------------------------------------
		*/

	
	
	
	 
 