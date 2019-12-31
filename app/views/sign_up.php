<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <base href='<?=$baseUrl ?> '>
  </head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="public/css/icon.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/main.css">
  <link rel="stylesheet" type="text/css" href="public/css/view-cat.css">
  <body>
     <div class="row">
       <div class="col-12 main_div">
         <div class="col-12 header">
          <div class="col-12 header_top">
            <div class="col-6 logo">
                <a href="./">
                barta
                </a>
              </div>    
              <div class="col-6 menu_list">
                <i class="icono-list menu_list_icon"  ></i>
                
                <ul class="col-12 menu_ul">
                
                </ul>
              </div>
              
          </div>
        </div>
         <div class="col-12 mid_div">
            <h1 class="welcome_text">
                  Create An Account
            </h1>
            <?php if (isset($_SESSION['error_message'])): ?>
            <div class="col-12 error_message">
              <?= $_SESSION['error_message'] ?>
              <?php unset($_SESSION['error_message']); ?>
            </div>
            <?php endif ?>
            <form class="" action="./create_user" method="post" enctype=multipart/form-data onsubmit="return validate(this)">
              <input type="text" name="name" placeholder="Username"><br>
	          <input type="number" name="phone_number" placeholder="Phone Number" value=""><br>
	          <input type="email" name="email" placeholder="Email"><br>
	          <input type="password" name="password" placeholder="Password"><br>
	          <input type="password" name="r_password" placeholder="Repeat Password"><br>
	          <input type="submit" name="submit" value="Create Account" class="submit"><br>
            </form>

            
         </div>
         <div class="col-12 footer">
            hafiz227@gmail.com
         </div>
       </div>
     </div>
  </body>
</html>
<script type="text/javascript">
  function validate(arg) {
    if(arg.name.value.length < 1){
      alert("Name Can not Empty");
      return false;
    }
    if(arg.phone_number.value.length < 11 || parseInt(arg.phone_number.value) < 0){
      alert("Select a Valid phone Number");
      return false;
    }
    if(arg.email.value.length < 3 || !arg.email.checkValidity() ){
      alert("Select a Valid Email");
      return false;
    }
    if(arg.password.value.length < 8){
      alert("Password Must Not be Less than 8 characters");
      return false;
    }
    if(arg.password.value != arg.r_password.value){
      alert("Password do not Tally");
      return false;
    }
    
    return true;
  }
</script>