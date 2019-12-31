<html>
  <head>
    <meta charset="utf-8">
    <title>Swap >> <?=$data['item_name']?></title>
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
                <a href="./My_uploads/add_item"><li>Upload Item</li></a>
                <a href="./account"><li>My Account</li></a>
                <a href="./logout"><li>Logout</li></a>
                </ul>
              </div>
              
          </div>
        </div>
         <div class="col-12">
              <div class="col-12 details_header" style="font-size:0.8em;">
                Details
              </div>
              <div class="col-6" style="padding:0; border-width:0 1 0 0;">
              <div class="col-12 item_name">
                <?=$data['item_name']?>
              </div>
              <div class="col-12 item_price">
                N  <?=$data['item_price']?>
              </div>
              <div class="col-12 cat_name">
                <?=$data['cat_name']?>
              </div>
              
             </div>
             <div class="col-6" style="padding:0; border-width:0 0 0 1;">
                <select name="offerring_value" class="col-11 col-offset-1" onchange="view(this)" style="text-align:center;" id="<?=$data['item_price']?>">
                   <option value="-1"> --- </option>
                   <?php foreach ($data['user_items'] as $key => $row): ?>
                    <option style="text-align:center;" value="<?=$row['item_id']?>" 
                      id="<?=$row['item_price']?>">
                        <?=$row['item_name']?>
                     </option>  
                   <?php endforeach ?>
                   
                </select>
                <div class="col-12 item_price" id="sells_at">
                  
                </div>
                <div class="col-12 item_price" id="profit_of">
                  
                </div>
             </div>
             <div class="col-12 swap" onclick="makeSwap()">
             Make A Swap
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
<script type="text/javascript">
  var selected_id = "-1";
  function makeSwap() {
      if(selected_id == "-1"){
        alert("Select an Option");
        return;
      }
      window.location.href =  (window.location.href+"/"+selected_id);
      return;
  }
  function view(arg) {
    selected_id = arg.value;
    var base_price = parseInt(arg.id);
    var price = parseInt(arg.selectedOptions[0].id);

    var sells_at = document.querySelector("#sells_at");
    var profit_of = document.querySelector("#profit_of");
    if( isNaN(price)){
      sells_at.innerHTML ="";
      profit_of.innerHTML ="";
      return;
    }

    // var rate  = (Math.round(((price-base_price)/price)*-100000))/1000 + "%" ;
    var rate  = base_price - price;
    sells_at.innerHTML ="sells at : N " +price;
    profit_of.innerHTML ="with an offset of : " +rate;

    if(((base_price-price)/base_price)*-100 > 0){
      profit_of.style.color = 'red';
    }else{
      profit_of.style.color = 'green';
    }
  }
</script>