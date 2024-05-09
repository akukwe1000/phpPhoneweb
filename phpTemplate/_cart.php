<?php 
  require_once 'classes/dbcontroller.php';
 ?>

<!-- shopping cart section  -->
<div id="cart" class="py-3">
        <div class="container-fluid w-75 ">
            <h5 class="fontRubik fontSize16">Shopping Cart</h5>

            <!-- shopping cart items  -->
            <div class="row">
                <div class="col-sm-9">
                <?php 
                 
                  foreach($product->getData('cart') as $item){ 
                    $cart = $product->getproduct(item_id : $item['item_id']);
                    $subtotal[] = array_map(function($item){
                    ?>
                    <!-- cart item  -->
                    <div class="row border-top py-2 mt-2">
                        <div class="col-sm-2">
                            <!-- <img src="./Asset/phone1.png" style="height: 70px;" alt="cart1" class="img-fluid"> -->
                            <img src="<?php echo $item['item_image'] ?? "./Asset/phone1.png" ;  ?>" style="height: 70px;" alt="cart1" class="img-fluid">
                        </div>
                        <div class="col-sm-8" style="line-height: 0;">
                            <!-- <h5 class="fontRale fontsize16 ">Redmi 10</h5> -->
                            <h5 class="fontRale fontsize16 "><?php echo $item['item_name'] ?? "unkown" ;  ?></h5>
                            <!-- <small>By Redmi</small> -->
                            <small><?php echo $item['item_brand'] ?? "brand" ;  ?></small>
                            <!-- product rating  -->
                            <div class="d-flex">
                              <div class="rating text-warning fontsize12 pt-3">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                                <a href="#" class="px-2 fontRale fontsize12 " >20,534 rating</a>
                              </div>
                            </div>
                            <!-- product rating  -->

                            <!-- product qut  -->
                            <div class="quantity pt-2 d-flex" >
                              <div class="d-flex fontRale w-25">
                                <button class="qtUp border bg-light" data-id="product1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" class="qtyImpurt border px-2   bg-light" data-id="product1" value="1" placeholder="1" disabled style="width: 100px;">
                                <button class="qtDown border bg-light" data-id="product1"><i class="fas fa-angle-down"></i></button>
                              </div>
                              <button type="submit" class="btn fontRubik text-danger  px-2 border-right " style="margin-left: 43px;">Delete</button>
                              <button type="submit" class="btn fontRubik text-danger  ">Safe for later</button>
                            </div>
                            <!-- product qut  -->
                        </div>
                        <div class="col-sm-2 text-right">
                          <div class="text-danger fontSize20 fontRubik">
                            $<span class="productPrice"><?php echo $item['item_price'] ?? 0 ;  ?></span>
                          </div>
                        </div>
                    </div>

                 <?php
                        return $item['item_price'];
                         }, $cart);  // closing array map function 
                       } // closing for each loop

                       $dbControllerInstance = new \classes\dbcontroller(); // Create an instance of dbController
                       $cartInstance = new \classes\cartClass($dbControllerInstance);
                       $totalPrice = $cartInstance->getSum($subtotal);

                       print_r($subtotal);
                    ?>
                    <!-- cart item  -->

                </div>

                <!-- subtotal section  -->
                <div class="col-sm-3">
                  <div class="subTotal border text-center  mt-1">
                    <h6 style="font-size: 10px;" class="fontRale text-success"><i class="fas fa-check"></i> Your order is eligible for free delievery</h6>
                    <div class="border-top py-3">
                      <!-- <h5 class="fontRubik fontsize16">subtotal (2 item): &nbsp; <span class="text-danger">$<span class="text-danger" id="dealPrice">152.00</span></span></h5> -->
                      <!-- <h5 class="fontRubik fontsize16">subtotal (2 item): &nbsp; <span class="text-danger">$<span class="text-danger" id="dealPrice"><?php echo isset($subtotal) ? $cart->getSum($subtotal) : 0;   ?></span></span></h5> -->
                      <h5 class="fontRubik fontsize16">subtotal (2 item): &nbsp; <span class="text-danger">$<span class="text-danger" id="dealPrice"><?php echo $totalPrice;  ?></span></span></h5>
                      <button type="submit" class="btn btn-warning fontSize12 mt-2"> Proceed to Buy</button>
                    </div>
                  </div>
                </div>
                <!-- subtotal section  -->

            </div>
            <!-- shopping cart items  -->
        </div>
    </div>
    <!-- shopping cart section  -->