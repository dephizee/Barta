<html>
  <head>
    <meta charset="utf-8">
    <title>Add New Item</title>
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
                <a href="./account"><li>My Account</li></a>
                <a href="./logout"><li>Logout</li></a>
                </ul>
              </div>
              
          </div>
        </div>
         <div class="col-12 mid_div">
            <h1 class="welcome_text">
                  My Uploads
            </h1>
            <form class="" action="My_uploads/upload" method="post" enctype=multipart/form-data onsubmit="return validate(this)">
              <select name="cat_no">
                <option value="-1">---Select Category---</option>
                <?php foreach ($data as $key => $row): ?>
                  <option value="<?=$row['cat_id']?>">
                    <?=$row['cat_name']?>
                  </option>
                <?php endforeach ?>
              </select>

              <input type="text" name="name" placeholder="Item Name"><br>
              <input type="number" name="price" placeholder="Item Price"><br>
              <textarea name="desc" placeholder="Describe Item"></textarea><br>
              <input type="file" name="pic" placeholder="Add Image" style="color:black;"><br>
              <input type="submit" name="submit" value="submit" class="submit"><br>
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
    if(arg.cat_no.value == "-1"){
      alert("Select a Category");
      return false;
    }
    if(arg.name.value.length < 1){
      alert("Name Can not Empty");
      return false;
    }
    if(arg.price.value.length < 1 || parseInt(arg.price.value) < 0){
      alert("Select a Valid Price");
      return false;
    }
    if(arg.desc.value.length < 1){
      alert("Describtion Can not Empty");
      return false;
    }
    if(arg.pic.value.length < 1){
      alert("Select a pic");
      return false;
    }
    
    return true;
  }
</script>