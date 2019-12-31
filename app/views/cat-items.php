<html>
  <head>
    <meta charset="utf-8">
    <title><?=$data[0]['cat_name']?> >> Category Items</title>
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
                <a href="./My_uploads/add_item"><li>Upload Item</li></a>
                </ul>
              </div>
              
          </div>
        </div>
         <div class="col-12 mid_div">
            <h1 class="welcome_text">
                  <?=$data[0]['cat_name']?>
            </h1>
            <?php foreach ($data as $key => $row): ?>
              <div onclick="view(this)" class="col-9 cat_item_name">
              	<div class="col-3 cat_item_image_container" >
                	<img src="<?=$row['image_thumbnail_location']?>" class="cat_item_image">
              	</div>
                <?=$row['item_name']?>
              </div>
              <a href="./my_uploads/view_item/<?=$row['item_id']?>">
                <div onclick="view(this)" class="col-3 items_view">
                  View items
                </div>
              </a>
              

            <?php endforeach ?>

            
         </div>
         <div class="col-12 footer">
            hafiz227@gmail.com
         </div>
       </div>
     </div>
  </body>
</html>
