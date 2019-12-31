<?php 
class Account extends Controller{
	
	function index(){
		if(!isset($_SESSION['user_id'])){
			header("location: ./#login");
		}

		$this->view('account',DBUtils::getUserDetails($_SESSION['user_id']));
	}
	
}
 ?>