<html>
  <head>
    <meta charset="utf-8">
    <title>Barta</title>
    
    <base href='<?=$baseUrl ?> '>
  </head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="public/css/icon.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/main.css">
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
                <?php if (isset($_SESSION['user_id'])): ?>
                  
                  <a href="./account"><li>My Account</li></a>
                  <a href="./logout"><li>Logout</li></a>
                  
                <?php else: ?>
                  <a href="#login"><li>Login</li></a>
                <?php endif ?>
                </ul>  
                

                
              </div>
              
          </div>
          <div class="col-12">
            <div class=" col-offset-4 col-8 header_main">
              <h1 class="welcome_text">
                  We all Make Mistakes
              </h1>
              <div class=" col-offset-6 col-2">
                  facebook 
                  <i class="icono-facebook" style="color: blue" ></i>
              </div>
              <div class=" col-offset- col-2">
                  twiiter
                  <i class="icono-twitter" style="color: cyan" ></i>
              </div>
              <div class=" col-offset- col-2">
                  Youtube
                  <i class="icono-youtube" style="color: red;" ></i>
              </div>
              <div class=" col-offset-8 col-4 g_started">
                Get Started
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mid_div" >
          <div class=" col-offset-4 col-8 sub_header_main">
            <h2 class="">
                Welcome to barta
            </h2 >
          </div>
          <div class=" col-offset-4 col-8">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            
          </div>
        </div>
         <div class="col-12 mid_div_2">
            <div class="col-offset-3 col-3 out_icon_container" >
              <div class="col-offset-6 col-6 icon_container">
                <i class="icono-display" style=" margin: 20px; color: #ff0028;;"></i>
              </div>
              <div class="col-12" >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              </div>
              <a href="./cat_items/1">
                <div class="col-offset-6 col-6 g_started" style="color: #fff;" >
                  View Electronics
                </div>
              </div>
              </a>
            <div class="col-offset- col-3 out_icon_container" >
              <div class="col-offset-6 col-6 icon_container">
                <i class="icono-meh" style=" margin: 20px; color: #ff0028;;"></i>
              </div>
              <div class="col-12" >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              </div>
              <a href="./cat_items/2">
                <div class="col-offset-6 col-6 g_started" style="color: #fff;" >
                  View Clothes
                </div>
              </a>
            </div>
            <div class="col-offset- col-3 out_icon_container" >
              <div class="col-offset-6 col-6 icon_container">
                <i class="icono-iphone" style=" margin: 20px; color: #ff0028;;"></i>
              </div>
              <div class="col-12" >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              </div>
              <a href="./cat_items/3">
                <div class="col-offset-6 col-6 g_started" style="color: #fff;" >
                  View Phones
                </div>
              </a>
            </div>
            
         </div>
         <?php if (!isset($_SESSION['user_id'])): ?>
           <div class="col-8 col-offset-4 mid_div" id="login">
            <?php if (isset($_SESSION['error_message'])): ?>
            <div class="col-12 error_message">
              <?= $_SESSION['error_message'] ?>
              <?php unset($_SESSION['error_message']); ?>
            </div>
            <?php endif ?>
            <form class="" action="./login" method="POST" onsubmit="testf()">
              <input type="text" name="name" placeholder="Username">
              <input type="password" name="password" placeholder="Password">
              <input type="submit" name="submit" value="Login" class="submit">
            </form>
          </div>
          <div class="col-12 signup_message">
            Don't have an account? <a href="./signup">Sign Up here</a>
          </div>         
         <?php endif ?>
        

         <div class="col-12 footer">
            hafiz227@gmail.com
         </div>
       </div>
     </div>
  </body>
</html>
