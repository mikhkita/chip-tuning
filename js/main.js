$(document).ready(function(){	
    var nowScrollTop = 0;

    var curSpan = 0;
    $(".b-1 .b-main-desc>h2 span").eq(0).show();

    setInterval(function(){
        $(".b-1 .b-main-desc>h2 span").fadeOut(300);
        curSpan = (curSpan+1 < $(".b-1 .b-main-desc>h2 span").length)?(curSpan+1):0;
        setTimeout(function(){
            $(".b-1 .b-main-desc>h2 span").eq(curSpan).fadeIn(300);
        },330);
    },4000);

    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
    }
    $(window).resize(resize);
    resize();

    $("select").each(function(){
        if( $(this).val() == "" ) $(this).addClass("empty");
    }).change(function(){
        $(this).removeClass("empty");
        if( $(this).val() == "" ) $(this).addClass("empty");
    });

    $(window).stellar({
        hideDistantElements: false,
        horizontalScrolling: false,
        positionProperty: 'transform'
    });


    // $.fancybox.open({
    //     content : $("#b-popup-1"),
    //     padding : 0
    // });

    // function whenScroll(){
    //     if( Math.abs(nowScrollTop - $("body").scrollTop()) > 50 ){
    //         $(".b-layer-1,.b-layer-2").addClass("transition");
    //     }else{
    //         $(".b-layer-1,.b-layer-2").removeClass("transition");
    //     }
    //     nowScrollTop = $("body").scrollTop();
    // }
    // $(window).scroll(whenScroll);
    
	var myPlace = new google.maps.LatLng(55.754407, 37.625151);
    var myOptions = {
        zoom: 16,
        center: myPlace,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        scrollwheel: false,
        zoomControl: true
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

    var marker = new google.maps.Marker({
	    position: myPlace,
	    map: map,
	    title: "Ярмарка вакансий и стажировок"
	});

    $(".b-dialog").hide();

    custom['dialog'] = function(el){
        var $items = el.find(".b-dialog");
        setTimeout(function(){
            $items.eq(0).fadeIn(300);

            setTimeout(function(){
                $items.eq(0).fadeOut(300);

                setTimeout(function(){
                    $items.eq(1).fadeIn(300);

                    setTimeout(function(){
                        $items.eq(1).fadeOut(300);

                        setTimeout(function(){
                            $items.eq(2).fadeIn(300);
                        },300);
                    },2500);
                },300);
            },2500);
        },0);
    }

    //  var options = {
    //     $AutoPlay: true,                                
    //     $SlideDuration: 500,                            

    //     $BulletNavigatorOptions: {                      
    //         $Class: $JssorBulletNavigator$,             
    //         $ChanceToShow: 2,                           
    //         $AutoCenter: 1,                            
    //         $Steps: 1,                                  
    //         $Lanes: 1,                                  
    //         $SpacingX: 10,                              
    //         $SpacingY: 10,                              
    //         $Orientation: 1                             
    //     }
    // };

    // var jssor_slider1 = new $JssorSlider$("slider1_container", options);

});