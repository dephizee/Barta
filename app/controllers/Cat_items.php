<?php 
class Cat_items extends Controller{
	
	function index($cat_id=""){
		// if(!isset($_SESSION['user_id'])){
		// 	header("location: ./");
		// }
		
		$this->view('cat-items',DBUtils::getCatItems($cat_id) );
	}
	
}
 ?>