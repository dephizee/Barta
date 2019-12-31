<?php 
class My_uploads extends Controller{
	
	function index(){
		if(!isset($_SESSION['user_id'])){
			header("location: ./../");
		}
		
		$this->view('my-items',DBUtils::getItems($_SESSION['user_id']));
	}
	function add_item(){
		if(!isset($_SESSION['user_id'])){
			header("location: ./../#login");
		}
		$this->view('add_item',DBUtils::getCats());
	}
	function upload(){
		if(isset( $_POST['submit'] ) ){
	    	$result = DBUtils::uploadItem(
	    		$_POST, 
	    		ImageProcessor::upload_image($_FILES, "./public/photo_folder/".$_SESSION['username']. "/" )
	    		 );
	    	if($result['status'] == 200){
	    		header('location: ./My_uploads');
	    	}
	    	
	  	}
	}
	function view_item($item_id=""){
		if(!isset($_SESSION['user_id'])){
			header("location: ./../#login");
		}
		$this->view('view-item',DBUtils::getItemDetails($item_id));
	}
	function swap_items($item_id="", $offer_id=""){

		if(!isset($_SESSION['user_id'])){
			header("location: ./../");
		}
		if($offer_id != ""){
			$result = DBUtils::swap_items($item_id, $offer_id);
			if($result['status'] == 200){
				header("location: ./../../");
			}
		}else{
			$this->view('swap-items',DBUtils::getItemDetailsAndUserItems($item_id, $_SESSION['user_id']));
		}
		
	}
	
}
 ?>