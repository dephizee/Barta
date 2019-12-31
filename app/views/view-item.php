<html>
  <head>
    <meta charset="utf-8">
    <title><?=$data['item_data']['item_name']?></title>
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
                  <a href="./account"><li>My Account</li></a>
                  <a href="./logout"><li>Logout</li></a>
                </ul>
              </div>
              
          </div>
        </div>
         <div class="col-10 col-offset-2">
          <div class="col-6" style="padding:0; border-width:0;">
              <div class="col-12" style="padding:0; border-width:0;">
              <img src="<?=$data['item_data']['item_image']?>" class="item_image">
              </div>
          </div>
          <div class="col-6" style="padding:0; border-width:1;">
             <div class="col-12 details_header" >
               Details
             </div>
             
              <div class="col-12 details">
                <div class="col-12 item_name">
                  <?=$data['item_data']['item_name']?>
                </div>
                <div class="col-12 item_price">
                  N <?=$data['item_data']['item_price']?>
                </div>
                <div class="col-12 details">
                  Phone Number : <?=$data['item_data']['uploader_number']?>
                </div>
                <div class="col-12 cat_name" style="font-family:monospace;">
                  <?=$data['item_data']['cat_name']?>
                </div>
                <?php if ($data['item_data']['user_number'] != $data['item_data']['user_id']): ?>
                  <a href="./my_uploads/swap_items/<?=$data['item_data']['item_id']?>" >
                    <div class="col-12 swap">
                      Make A Swap
                    </div>
                  </a>
                <?php endif ?>

               </div>
              
           </div>
           <div class="col-12">
             <div class="col-12 details_header" >
               Description
             </div>
             <div class="col-12 desc">
               <?=$data['item_data']['item_desc'] ?>
             </div>
           </div>
          </div>

          <?php if ($data['item_data']['user_number'] == $data['item_data']['user_id'] ): ?>
          <div class="col-12 details_header" >
             Offers
           </div>
          <div class="col-10 col-offset-2 offer">
            <?php foreach ($data['offers']  as $key => $row): ?>
              <div class="col-12 main_detail">
                    <span>  <?=$row['item_name']?> </span>
                    <div class="sub_detail">
                      <div class="col-8">
                        N <?=$row['item_price']?>
                      </div>
                      <div class="col-4">
                        offset of : N <?=(($row['item_price'] - $row['b_item_price']))?>
                      </div>
                      <div class="col-12">
                        Phone Number : <?=$row['phone_number']?>
                      </div>
                </div>
              </div>
            <?php endforeach ?>
            
        </div>
        <?php endif ?>
         <div class="col-12 footer">
            hafiz227@gmail.com
         </div>
       </div>
     </div>
  </body>
</html>
