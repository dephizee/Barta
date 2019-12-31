<html>
  <head>
    <meta charset="utf-8">
    <title><?=$data['username']?></title>
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
                  <a href="./my_uploads"><li>My Uploads</li></a>
                  <a href="./add_item"><li>Upload Item</li></a>
                  <a href="./logout"><li>Logout</li></a>
                </ul>
              </div>
              
          </div>
        </div>
         <div class="col-8 col-offset-4" style="padding:0; border-width:1;">
             <div class="col-12 details_header" >
               Details
             </div>
             
              <div class="col-12 details">
                <div class="col-12 item_name">
                  <?=$data['username']?>
                </div>
                <div class="col-12 item_price">
                  <?=$data['email']?>
                </div>
                <div class="col-12 details">
                  Phone Number : <?=$data['phone_number']?>
                </div>
               </div>
              
           </div>
          
         <div class="col-12 footer">
            hafiz227@gmail.com
         </div>
       </div>
     </div>
  </body>
</html>
