 <?php  
  shuffle($product_shuffle);

  // request method post 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['new-phone-submit'])){
    
    // call method add to cart 
    $cart->addtoCart($_POST['user_id'], $_POST['item_id']);
  }
}

?>
 
 <!-- new phone section  -->
 <section id="NewPhone" style="width: 70%; margin: auto;">
        <div class="container py-3">
          <h4 class="fontRubik fontsize20">New Phones</h4>
          <hr>

          <!-- owl carousel  -->
          <div class="owl-carousel owl-theme">
          <?php foreach($product_shuffle as $item){ ?>
            <div class="item py-2">
              <div class="product fontRale" style="display: flex; flex-direction: column; align-items: center;">
                <!-- <a href="#"><img src="./Asset/samsung10.jpg" alt="produc1" class="img-fluid" style="height: 100px; width:80px;"></a> -->
                <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? './Asset/samsung10.jpg' ?>" alt="produc1" class="img-fluid" style="height: 100px; width:80px;"></a>
                <div class="text-center">
                  <!-- <h3 class="fontsize12">Samsung galaxy 10</h3> -->
                  <h3 class="fontsize12"><?php echo $item['item_name'] ?? 'name' ?></h3>
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
                    <button type="submit" class="btn btn-warning fontsize12" name="new-phone-submit">Add to cart</button>
                  </form>
                  <!-- <button type="submit" class="btn btn-warning fontsize12">Add to cart</button> -->
                </div>
              </div>
            </div>
            <?php } ?>

           

            
            
            
            
          </div>
          <!-- owl carousel  -->

        </div>
      </section>
      <!-- new phone section  -->