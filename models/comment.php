<?php

/*********************************************************** 
* Class name:
*     Commnent 
* Descripton:
*     Commnent data, class extends Model abstract
**********************************************************/

class Comment extends Model
{
	/*********************************************************** 
	* Private members
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
