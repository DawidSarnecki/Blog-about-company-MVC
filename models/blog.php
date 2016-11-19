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
	
	
	
	public function add()
	{
		return;
	}
	
	
	
	public function insert($post)
	{
		$this->query('INSERT INTO blogtext (Title, Text, X_CreateUser, Status) VALUES (:title, :body, :user, :status)');
		$this->bindValue(':title', $post['title']);
		$this->bindValue(':body',$post['body']);
		$this->bindValue(':user', $_SESSION['ID']);
		$this->bindValue(':status', true);
		$this->execute();
		
		// Verify
		/*
		if($this->lastInsertId())
		{
			// Redirect
			//header('Location: '.ROOT_URL.'users/login');
			//echo "działa lastinsert";	
		}
		*/
	}

	public function addComment($itemId)
	{
		$this->query('SELECT * FROM blog_public WHERE blogtext_id = :postId');
		$this->bindValue(':postId', $itemId);
		$row = $this->single();
		$item = new Post($row['Title'], $row['Status'], $row['Login'], $row['Text'], $row['X_UpdateTime'],
			$row['X_RemoveTime'], $row['X_CreateUser'],$row['blogtext_id']);
		
		//print_r($row);
		//var_dump($item);
		return $item;
	}
		
		
	public function insertComment($post)
	{
		//echo $user_id = $_SESSION['ID'];
		$this->query('INSERT INTO blogcomment(BlogItemID, Author, Text) VALUES( :id , :userId, :body)');
		$this->bindValue(':id', $post['Id']);
		$this->bindValue(':userId',$_SESSION['ID']);
		$this->bindValue(':body', $post['body']);
		$this->execute();
		/*
		// Verify
		if($this->lastInsertId())
		{
			// Redirect
			//header('Location: '.ROOT_URL.'users/login');
			echo "działa lastinsert";	
		}
		*/
	}
	
	
	public function archive()
	{
		return;
	}

}
