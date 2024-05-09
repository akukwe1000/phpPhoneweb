<?php  
  $brand = array_map(function($pro){return $pro['item_brand'];}, $product_shuffle);
  $unique = array_unique($brand);
  // print_r($unique)

  shuffle($product_shuffle);

 // request method post 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['special-price-submit'])){
    
    // call method add to cart 
    $cart->addtoCart($_POST['user_id'], $_POST['item_id']);
  }
}




?>


<!-- special price stats here  -->
<section id="specialPrice" style="width: 70%; margin: auto;">
        <div class="container">
          <h4 class="fontRale fontsize20 fw-bold">Special price</h4>
          <div id="filter" class="button-group text-right">
            <button class="btn is-checked" data-filter="">All Brands</button>
            <?php
              array_map(function($brand){
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand,$brand );
              }, $unique);  
            ?>
            <!-- <button class="btn " data-filter=".Apple">Apple</button>
            <button class="btn" data-filter=".Samsung">Samsung</button>
            <button class="btn" data-filter=".Redmi">Redmi</button> -->
          </div>

          <div class="grid">
          <?php array_map(function($item){ ?>
            <div class="grid-item <?php echo $item['item_brand'] ?? 'brand' ?> border">
              <div class="item py-2 " style="width: 200px;">
                <div class="product fontRale" style="display: flex; flex-direction: column; align-items: center;">
                <!-- <a href="#"><img src="./Asset/phone3.jpg" alt="produc1" class="img-fluid" style="height: 100px; width:80px;"></a> -->
                <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? './Asset/phone3.jpg' ?>" alt="produc1" class="img-fluid" style="height: 100px; width:80px;"></a>
                <div class="text-center">
                  <!-- <h3 class="fontsize12">iphone 12</h3> -->
                  <h3 class="fontsize12"> <?php echo $item['item_name'] ?? 'name' ?> </h3>
                  <div class="rating text-warning fontsize12 ">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-regular fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$ <?php echo $item['item_price'] ?? 0 ?> </span>
                  </div>
                  <form method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1; ?>">
                    <input type="hidden" name="user_id" value="<?php echo  1; ?>">
                    <button type="submit" class="btn btn-warning fontsize12" name="special-price-submit">Add to cart</button>
                  </form>
                  <!-- <button type="submit" class="btn btn-warning fontsize12">Add to cart</button> -->
                </div>
              </div>
              </div>
            </div>
            <?php } ,  $product_shuffle) ?>

            

            

            


          </div>
        </div>
      </section>
      <!-- special price ends here  -->