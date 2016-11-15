<?php
/*********************************************************** 
* Class name:
*    Contact
* Descripton:
*    Extends Controller
**********************************************************/

class Contact extends Controller
{
	
	/*********************************************************** 
	* Protected members
	************************************************************/  
	
	protected function Index(){
		$viewmodel = new ContactModel();
		$this->returnView($viewmodel->Index(), true);
	}
}