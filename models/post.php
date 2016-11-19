<?php
/*********************************************************** 
* Class name:
*    BlogModel
* Descripton:
*    extends Model abstract class
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
	
	public function __construct($tit, $stat, $logi, $tex, $updateT,$removeT,$user,$postId)
    {
		$this->title = $tit;
		$this->status = $stat;
		$this->login = $logi;
		$this->text = $tex;
		$this->updateTime = $updateT;
		$this->removeTime = $removeT;
		$this->userId = $user;
		$this->Id = $postId;	
    }
	
	public function add($tit, $logi, $tex, $updateT,$removeT,$user,$postId)
    {
		$this->title = $tit;
		$this->login = $logi;
		$this->text = $tex;
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
		return $this->user;
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