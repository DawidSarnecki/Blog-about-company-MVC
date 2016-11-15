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
		
		//$blogitem = array();
		
		//echo "<br><br>";
		
		
		$this->query('SELECT * FROM all_comments');
			$commentss = $this->resultset();
			//print_r($commentss);
		
	
		foreach ($rows as $row)
		{
		echo "<br>".$row['blogtext_id']."<br>";
			$this->query
			('SELECT * FROM all_comments 
			WHERE BlogItemID = :blog_id');
			$this->bindValue(':blog_id', $row['blogtext_id']);
			$comments = $this->resultset();
			//print_r($comments);
			
			if ($comments)
			{
				foreach ($comments as $com)
				{
					// nie działa przypisanie: weiersz tablicy rows -> tablica comments
					
					$blogitem[$row['blogtext_id']] = $com;
				}
			}
		}
		//print_r($blogitem);
		return $blogitem;
	
	}
	
	
	  public function get_comments($text_id)
    {        
        //prepare query
        $this->query('SELECT * FROM all_comments 
		WHERE BlogItemID = :blog_id');
		$this->bindValue(':blog_id', $text_id);
		
		//execute query
		$comments = $this->resultset();
		return $comments;

	  /*
        $resultArr[0] = 0;
        $i = 1;
        while( $result = $this->db->fetch('array')){
            $resultArr[$i] = $result;
            $i++;
        }
        $resultArr[0] = $i;

        return $resultArr;
    }
	*/
	
	/*
	public function Index(){
		$this->query('SELECT * FROM blog_public');
		$rows = $this->resultSet();
		//print_r($rows);
		return $rows;
	}
	
	
	  public function get_comments($text_id)
    {        
        //prepare query
        $this->query('SELECT * FROM all_comments 
		WHERE BlogItemID = :blog_id');
		
		$this->bindValue(':blog_id', $row['blogtext_id']);
		
		//execute query
		$comments = $this->resultset();
		return $comments;

	  /*
        $resultArr[0] = 0;
        $i = 1;
        while( $result = $this->db->fetch('array')){
            $resultArr[$i] = $result;
            $i++;
        }
        $resultArr[0] = $i;

        return $resultArr;
	*/	
    }
	
	
	
	/*********************************************************** 
	* Public members
	************************************************************/ 

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