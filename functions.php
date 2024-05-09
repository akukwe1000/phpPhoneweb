<?php  
    //  require mysql connection  
    require ('classes/dbcontroller.php');
// adding my class object  for the dbcontroller
     $db = new dbcontroller();  


      //  require fetch product class  
    require ('classes/fetchProductClass.php');
    // adding my class object  for the fetch product class
    $product = new product($db); 

    // add product shuffle variable so it can be accessed every where 
      $product_shuffle = $product->getData() ;

      

    // print_r( $product->getData()); 

 //  require cart class  
    require ('classes/cartClass.php');
    // cart object 
    $cart = new cart($db);
    

?>