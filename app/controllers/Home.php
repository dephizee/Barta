<?php 
class Home extends Controller{
	
	function index(){
		$this->view('home', [1,'aa']);
	}
	function signup(){
		$this->view('sign_up', [1,'aa']);
	}
	function create_user(){
		if(isset( $_POST['submit'] ) ){
	    	$result = DBUtils::createUser($_POST['name'], $_POST['phone_number'], $_POST['email'], $_POST['password'] );
	    	if($result['status'] == 200){
	    		header("location: ./account");
	    	}else{
	    		header("location: ./signup");
	    	}
	  	}
	}
	function login(){
	
		if(isset( $_POST['submit'] ) ){
	    	$result = DBUtils::processLogin($_POST['name'], $_POST['password'] );
	    	if($result['status'] == 200){
	    		header("location: ./account");
	    	}else{
	    		header("location: ./#login");
	    	}
	  	}
		
	}
	function logout(){
		session_destroy();
		header("location: ./#login");
	}
}
 ?>