<?php
/*********************************************************** 
* Class name:
*    Post
* Descripton:
*    Post data, class extends Model abstract class
**********************************************************/

class Post extends Model
{
	/*********************************************************** 
	* Protected members
	************************************************************/ 
	protected $Id;
	protected $title;
	protected $status;
	protected $login;
	protected $text;
	protected $updateTime;
	protected $removeTime;
	protected $userId;
	protected $comments;
	
	 
	/*********************************************************** 
	* Public members
	************************************************************/ 
	
	public function __construct($title, $status, $login, $text, $updateT,$removeT,$user,$postId)
    {
		$this->title = $title;
		$this->status = $status;
		$this->login = $login;
		$this->text = $text;
		$this->updateTime = $updateT;
		$this->removeTime = $removeT;
		$this->userId = $user;
		$this->Id = $postId;	
    }
	
	public function setCommnets($comments)
	{        
		$this->comments = $comments;
	}
	
	public function getTitle()
	{        
		return $this->title;
	}
	
	public function getUserId()
	{        
		return $this->userId;
	}
	
	public function getBody()
	{        
		return $this->text;
	}
	
	public function getUpdateTime()
	{        
		return $this->updateTime;
	}
	
	public function getLogin()
	{        
		return $this->login;
	}
	
	public function getId()
	{        
		return $this->Id;
	}
	
	public function getComments()
	{
		return $this->comments;
	}
	
}