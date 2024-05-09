

$(document).ready(function(){
    // banner owl carousel 
    $("#bannerArea .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel 
    $("#topSale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    
    

    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // Filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

     // new phone owl carousel 
     $("#NewPhone .owl-carousel").owlCarousel({
        loop:false,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    // product quantity js code  for the up and down buttons
    let $QtyUp = $(".quantity .qtUp");
    let $QtyDown = $(".quantity .qtDown");
    // let $input = $(".quantity .qtyImpurt");

    //  click event on tne above button  but the up button first
    $QtyUp.click(function(e){
        // let $input = $(`.qtyImpurt[data-id ='${$(this).data("id")}']`);
        let $input = $(".qtyImpurt[data-id='" + $(this).data("id") + "']");

        if($input.val()>=1 && $input.val()<=19){   //here the customer cant puchase more than 10 quantity bcus of the second if statment
            $input.val(function(i, oldva){
                return ++oldva;
            })
        }
    });
    //  click event on tne above button  now the down button
    $QtyDown.click(function(e){
        // let $input = $(`.qtyImpurt[data-id ='${$(this).data("id")}']`);
        let $input = $(".qtyImpurt[data-id='" + $(this).data("id") + "']");

        if($input.val()>1 && $input.val()<= 20){   //here the customer cant puchase more than 10 quantity bcus of the second if statment
            $input.val(function(i, oldva){
                return --oldva;
            })
        }
    });
});
