$(document).ready(function(){
	var count = $(".b-review").length,
		nowItem = 0,
		items = new Array(),
		inter,
		blocked = false,
		mouseon = false;

	$(".b-review").each(function(){
		items.push($(this));
	});
	items[0].show();

	$(".b-left-arrow").click(function(){
		goTo( ( nowItem > 0 )?(nowItem-1):(count-1), -1 );
		clearInterval(inter);
		return false;
	});
	$(".b-right-arrow").click(function(){
		goTo( ( nowItem < count-1 )?(nowItem+1):0, 1 );
		clearInterval(inter);
		return false;
	});

	function goTo(next,side){
		if( blocked ) return false;
		blocked = true;
		TweenLite.to(items[nowItem], 0.3, { "left" : -1*side*50, ease : Quad.easeInOut } );
		items[nowItem].fadeOut(300);
		setTimeout(function(){
			items[next].css("left",1*side*50);
			TweenLite.to(items[next], 0.3, { "left" : 0, ease : Quad.easeInOut } );
			items[next].fadeIn(300);
			nowItem = next;
			setTimeout(function(){
				blocked = false;
			},100);
		},300);
	}

	$(".b-9").hover(function(){
		mouseon = true;
	},function(){
		mouseon = false;
	});

	var swipeh = new MobiSwipe("b-reviews");
        swipeh.direction = swipeh.HORIZONTAL;
    	swipeh.onswiperight = function() { $(".b-left-arrow").click(); };
    	swipeh.onswipeleft = function() { $(".b-right-arrow").click(); };

	inter = setInterval(function(){
		if( mouseon ) return false;
		$(".b-right-arrow").click();
	},5000);

});