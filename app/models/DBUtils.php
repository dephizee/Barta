<?php
	
	class DBUtils{
		
		public static function getItemDetailsAndUserItems($item_id, $user_id){
			require_once 'conn.php';
			$query = "SELECT * FROM `items` inner JOIN categories on items.cat_number = categories.cat_id left join images on items.image_no = images.image_id where item_id = '{$item_id}'";
			$data = array();
			if($result = mysqli_query($conn, $query)){
                if ($row = mysqli_fetch_assoc($result)) {
					$data['item_id'] = $row['item_id'];
					$data['item_name'] = $row['item_name'];
					$data['item_price'] = $row['item_price'];
					$data['cat_name'] = $row['cat_name'];
					// $data['uploader_number'] = $row['phone_number'];
					$data['user_number'] = $row['user_number'];
					$data['image_location'] = $row['image_location'];
    				$data['item_desc']= $row['item_desc'];
    				$data['item_image']= $row['image_location'];    				
                }
           	}else {
            	echo mysqli_error($conn);
           	}
           	$query = "select * from items where user_number = '{$user_id}'";
           	$user_items = array();
           	if($result = mysqli_query($conn, $query)){
                while ($row = mysqli_fetch_assoc($result)) {
                	$inner_user_items = array();

					$inner_user_items['item_id'] = $row['item_id'];
					$inner_user_items['item_name'] = $row['item_name'];
					$inner_user_items['item_price'] = $row['item_price'];
					$user_items[] = $inner_user_items;
                }
                
           	}else {
            	echo mysqli_error($conn);
           	}
           	$data['user_items'] = $user_items;
           	return $data;
		}
		public static function getItemDetails($item_id){
			require_once 'conn.php';
			$query = "SELECT * FROM `items` inner JOIN categories on items.cat_number = categories.cat_id left join m_users on items.user_number = m_users.user_id left join images on items.image_no = images.image_id where item_id = '{$item_id}'";
			$returning_data = array();
			$data = array();
			if($result = mysqli_query($conn, $query)){
                if ($row = mysqli_fetch_assoc($result)) {
					$data['item_id'] = $row['item_id'];
					$data['item_name'] = $row['item_name'];
					$data['item_price'] = $row['item_price'];
					$data['cat_name'] = $row['cat_name'];
					$data['uploader_number'] = $row['phone_number'];
					$data['user_number'] = $row['user_number'];
					$data['image_location'] = $row['image_location'];
    				$data['item_desc']= $row['item_desc'];
    				$data['item_image']= $row['image_location'];
    				$data['user_id']= $_SESSION['user_id'];
    				
                }
                $returning_data['item_data'] = $data;
           	}else {
            	echo mysqli_error($conn);
           	}
           	$query = "SELECT o_item.item_name as item_name, o_item.item_price as item_price, m_users.phone_number,  
                 b_item.item_price as b_item_price FROM applications left join items as o_item on applications.offerring_item = o_item.item_id inner join m_users on user_number = m_users.user_id   inner join items as b_item on applications.base_item = b_item.item_id where base_item = '{$item_id}' order by item_price desc";
            if($result = mysqli_query($conn, $query)){
            	$inner_items = array();
                while ($row = mysqli_fetch_assoc($result)) {
					$inner_items[] =  $row;
                }
                $returning_data['offers'] = $inner_items;
           	}else {
            	echo mysqli_error($conn);
           	}
           	return $returning_data;

		}
		public static function getCatItems($cat_id){
			require_once 'conn.php';
			$query = "select * from items left join categories on items.cat_number = categories.cat_id left join images on items.image_no = images.image_id where cat_number = '{$cat_id}'";
			$data = array();
		  	if($result = mysqli_query($conn, $query)){
		    	while ($row = mysqli_fetch_assoc($result)) {
		    		$inner_data = array();
		    		$inner_data['item_id'] = $row['item_id'];
		    		$inner_data['item_name'] = $row['item_name'];
		    		$inner_data['item_price'] = $row['item_price'];
		    		$inner_data['image_thumbnail_location'] = $row['image_thumbnail_location'];
		    		$inner_data['cat_name'] = $row['cat_name'];
		    		$data[] = $inner_data;
		    	}
		  	}

		  	return $data;
		}
		public static function getItems($user_id){
			require_once 'conn.php';
			$query = "select * from items left join images on items.image_no = images.image_id  where user_number = '{$user_id}'";
			$data = array();
		  	if($result = mysqli_query($conn, $query)){
		    	while ($row = mysqli_fetch_assoc($result)) {
		    		$inner_data = array();
		    		$inner_data['item_id'] = $row['item_id'];
		    		$inner_data['item_name'] = $row['item_name'];
		    		$inner_data['item_price'] = $row['item_price'];
		    		$inner_data['image_thumbnail_location'] = $row['image_thumbnail_location'];
		    		$data[] = $inner_data;
		    	}
		  	}
		  	return $data;
		}
		public static function createUser($username, $number, $email ,$password){
			require_once 'conn.php';
			$username = mysqli_real_escape_string($conn, $username )  ;
			$number = mysqli_real_escape_string($conn, $number )  ;
			$email = mysqli_real_escape_string($conn, $email )  ;
			$password = mysqli_real_escape_string($conn, $password )  ;
			$password = password_hash($password, PASSWORD_BCRYPT);
			$query = "insert into m_users (username, phone_number, email, password) values ('{$username}', '{$number}', '{$email}', '{$password}')";
		    if($result = mysqli_query($conn, $query)){
		    		$_SESSION['user_id'] = mysqli_insert_id($conn);
			        $_SESSION['username'] = $username;
			        $_SESSION['phone_number'] = $number;
		    		return array('status' => 200 );
		    }else{
		      $_SESSION['error_message'] = "Username is taken";
		    }
		}
		public static function processLogin($username, $password){
			require_once 'conn.php';
			$username = mysqli_real_escape_string($conn, $username )  ;
			$query = "select * from m_users where username = '{$username}' ";
		    if($result = mysqli_query($conn, $query)){
		      if(mysqli_num_rows($result) == 1){
		      	$row = mysqli_fetch_assoc($result);
		      	if(password_verify($password, $row['password'])){
		      		$_SESSION['user_id'] = $row['user_id'];
			        $_SESSION['username'] = $username;
			        $_SESSION['phone_number'] = $row['phone_number'];
			        $_SESSION['state_number'] = $row['state_number'];
			        return array('status' => 200 );
		      	}else{
		      		$_SESSION['error_message'] = "Incorrect password or username";
		      		

		      	}
		        
		      }else{
		      	
		        header("location: ./");
		        // die(mysqli_error($conn));
		      }

		    }else{
		      die(mysqli_error($conn));
		    }
		}
		public static function getCats(){
			require_once('conn.php');
		  	$query = "select * from categories";
		  	$data = array();
		  	if($result = mysqli_query($conn, $query)){
		    	while ($row = mysqli_fetch_assoc($result)) {
		    		$inner_data = array();
		    		$inner_data['cat_id'] = $row['cat_id'];
		    		$inner_data['cat_name'] = $row['cat_name'];
		    		$data[] = $inner_data;
		    	}
		  	}
		  	return $data;
		}
		public static function getUserDetails($user_id){
			require_once('conn.php');
		  	$query = "select * from m_users where user_id = '{$user_id}'";
		  	$data = array();
		  	if($result = mysqli_query($conn, $query)){
		  		$data = mysqli_fetch_assoc($result);		    	
		  	}
		  	return $data;
		}
		public static function swap_items($item_id, $offer_id){
			require_once 'conn.php';
			$query = "insert into applications (base_item, offerring_item) values ('{$item_id}', '{$offer_id}')";
		 	if($result = mysqli_query($conn, $query)){
		    	return array('status' => 200 );
		  	}else{
		  		echo mysqli_error($conn);
		  	}
		}
		public static function uploadItem($data, $image_data){
			require_once 'conn.php';
			$name = mysqli_real_escape_string($conn, trim($data['name']));
	    	$price =  mysqli_real_escape_string($conn, trim($data['price']));
	 		$cat_no = mysqli_real_escape_string($conn, trim($data['cat_no']));
	    	$user_number = $_SESSION['user_id'];
	    	$desc = mysqli_real_escape_string($conn, trim($data['desc']));

	    	$image_location = mysqli_real_escape_string($conn, trim($image_data['original']));
	    	$image_thumbnail_location = mysqli_real_escape_string($conn, trim($image_data['thumbnail']));

		    $query = "insert into images (image_location, image_thumbnail_location) 
		    values ('{$image_location}', '{$image_thumbnail_location}')";
		    if($result = mysqli_query($conn, $query)){

		    	$image_no = mysqli_insert_id($conn);
		    	$query = "insert into items (item_name, item_price, cat_number, user_number, item_desc, image_no) values ('{$name}', '{$price}', '{$cat_no}', '{$user_number}', '{$desc}', '{$image_no}')";
		    	if($result = mysqli_query($conn, $query)){
		    		return array('status' => 200 );
		    	}else{
			      echo mysqli_error($conn);
			    }
		      
		    }else{
		      echo mysqli_error($conn);
		    }
		}
	}
 ?>