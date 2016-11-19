<?php

/*********************************************************** 
* Class name:
*    BlogModel
* Descripton:
*    extends Model abstract class
**********************************************************/

class Comment extends Model
{
	/*********************************************************** 
	* Public members
	************************************************************/ 
	private $Id;
	private $login;
	private $body;
	private $createTime;
	

	/*********************************************************** 
	* Public members
	************************************************************/ 	
	
	public function __construct($id, $login, $body, $date){
		$this->Id = $id;
		$this->login = $login;
		$this->body = $body;
		$this->createTime = $date;
	}
	
	public function getLogin()
	{        
		return $this->login;
	}
	
	public function getBody()
	{        
		return $this->body;
	}
	
	public function getCreateTime()
	{        
		return $this->createTime;
	}
	
	public function getId()
	{        
		return $this->Id;
	}

	
	
	
	
	
}
