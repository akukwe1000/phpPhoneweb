<!-- product  -->


<?php 
  $item_id = $_GET['item_id'] ?? 1;
  foreach($product->getData() as $item){
    if($item['item_id']== $item_id){
 ?>

<section id="product" class="py-3">
            <div style="width: 70%; margin: auto;" >
                <div class="row">
                    <div class="col sm-6">
                        <!-- <img src="./Asset/phone1.png" alt="" class="img-fluid" style="height: 300px; width: 200px; margin-left: 30px;"> -->
                        <img src="<?php echo $item['item_image'] ?? "./Asset/phone1.png" ?>" alt="" class="img-fluid" style="height: 300px; width: 200px; margin-left: 30px;">
                        <div class="form-row pt-5 fontSize16 fontRubik">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">Add to cart</button>

                            </div>
                        </div>
                    </div>
                    <div class="col sm-6" style="line-height: 5px;">
                        <!-- <h5 class="fontRubik fontsize16" style="margin: 0;">Redmi 10</h5> -->
                        <h5 class="fontRubik fontsize16" style="margin: 0;"><?php echo $item['item_name'] ?? "unknown" ?></h5>
                        <small style="margin: 0;" class="fontsize12">by <?php echo $item['item_brand'] ?? "brand" ?></small>
                        <div class="d-flex  mt-3 align-items-center">
                            <div class="rating text-warning fontsize12 ">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                              </div> 
                              <a href="#" class=" px-2fontRale fontsize14">20534 ratings | 1000+ answered questions </a>
                        </div>
                        <hr class="m-1">

                    <!-- product price -->
                    <table  style="line-height: 20px;">
                        <tr class="fontRale fontsize14">
                            <td>M.R.P</td>
                            <td><strike>$162.00</strike></td>
                        </tr>
                        <tr class="fontRale fontsize14">
                            <td >Deal price</td>
                            <td class="fontsize12 text-danger">$<span><?php echo $item['item_price'] ?? 0 ?></span> <small class="fontsize12 text-dark">Inclucieve of all taxes</small></td>
                        </tr>
                        <tr class="fontRale fontsize14">
                            <td class="fontSize14 " >you save</td>
                            <td class="fontsize12 text-danger"><span>152.00</span> </td>
                        </tr>
                    </table>
                    <!-- product price   -->

                    <!-- policy  -->
                    <div id="policy">
                      <div class="d-flex">
                        <div class="return text-center mr-3">
                          <div class="fontSize20 my-2 colorSecondary ">
                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="fontRale fontsize12" style="line-height: 20px;">10 Days <br>Replacement </a>
                        </div>
                        <div class="return text-center mr-3">
                          <div class="fontSize20 my-2 colorSecondary ">
                            <span class="fas fa-truck  border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="fontRale fontsize12" style="line-height: 20px;">Daily Tution <br> Deliever </a>
                        </div>
                        <div class="return text-center mr-3">
                          <div class="fontSize20 my-2 colorSecondary ">
                            <span class="fas fa-check-double  border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="fontRale fontsize12" style="line-height: 20px;">1 Year Waranty </a>
                        </div>
                      </div>
                    </div>
                    <!-- policy  -->
                    <hr>

                    <!-- order detail  -->
                    <div id="orderDetails" style="line-height: 20px;" class="fontRale fontsize12 d-flex flex-column text-dark">
                      <small>Delievery by: Mar 29 - Apr 1</small>
                      <small>Sold by <a href="#">Daily Electronics</a>4.5 out of 5 | 18,198 ratings</small>
                      <small><i class="fa fa-map-marker-alt colorPrimary"></i> &nbsp; &nbsp; Deliever To Customer -4242071</small>
                    </div>
                    <!-- order detail  -->

                    <!-- product quantity  -->
                    <div class="row">
                      <div class="col-6">
                        <!-- colors  -->
                        <div class="color my-1">
                          <div class="d-flex justify-content-between">
                            <h6 class="fontRubik">colour:</h6>
                            <div class="p-2 colorYellowBg rounded-circle"><button class="btn fontsize12"></button></div>
                            <div class="p-2 colorPrimaryBg rounded-circle"><button class="btn fontsize12"></button></div>
                            <div class="p-2 colorSecondaryBg rounded-circle"><button class="btn fontsize12"></button></div>
                          </div>
                        </div>
                        <!-- colors  -->
                      </div>
                      <div class="col-6">
                        <div class="quantity d-flex align-items-center">
                            <h6 class="fontRubik fontSize12 m-0">Qty </h6>
                            <div class="px-2 d-flex fontRale">
                              <button class="qtUp border bg-light" data-id="product1"><i class="fas fa-angle-up"></i></button>
                              <input type="text" data-id="product1" class="qtyImpurt border px-2  w-50 bg-light" value="1" placeholder="1" disabled>
                              <button class="qtDown border bg-light" data-id="product1"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- product quantity  -->

                    <!-- ram size  -->
                    <div class="size my-2">
                      <h6 class="fontRubik">Size</h6>
                      <div class="d-flex justify-content-between w-75">
                        <div class="border fontRubik p-2">
                          <button style="border: none;" class="p-0 fontsize12">4Gb Ram</button>
                        </div>
                        <div class="border fontRubik p-2">
                          <button style="border: none;" class="p-0 fontsize12">6Gb Ram</button>
                        </div>
                        <div class="border fontRubik p-2">
                          <button style="border: none;" class="p-0 fontsize12">8Gb Ram</button>
                        </div>
                      </div>
                    </div>
                    <!-- ram size  -->



                    </div>

                    <!-- product discription  -->
                    <div class="col-12">
                      <h6 class="fontRubik">Product Discription</h6>
                      <hr>
                      <p class="fontRale fontsize12">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officia sequi error ab dolore, omnis nobis! Maxime, doloremque possimus incidunt illo tempora mollitia veritatis, qui tempore maiores rerum porro eum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium error sit quae sapiente fuga perspiciatis cum. Omnis necessitatibus consequatur animi quaerat fugit odit, asperiores est magni qui. Recusandae, sunt accusamus.</p>
                      <p class="fontRale fontsize12">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officia sequi error ab dolore, omnis nobis! Maxime, doloremque possimus incidunt illo tempora mollitia veritatis, qui tempore maiores rerum porro eum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium error sit quae sapiente fuga perspiciatis cum. Omnis necessitatibus consequatur animi quaerat fugit odit, asperiores est magni qui. Recusandae, sunt accusamus.</p>
                    </div>
                    <!-- product discription  -->


                </div>
            </div>
        </section>

        
        
        <!-- product  -->
        <?php } } ?>
        



        