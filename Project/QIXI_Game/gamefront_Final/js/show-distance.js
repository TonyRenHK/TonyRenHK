	function hasClass(obj, cls) {  
    	return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));  
	}  

	function addClass(obj, cls) {  
   		if (!this.hasClass(obj, cls)) obj.className += " " + cls;  
	}


	var fireItem = document.getElementById("fire");
	var lightItem = document.getElementById("light");
	var poem1 = document.getElementById("poem1");
	var poem2 = document.getElementById("poem2");
	fireItem.addEventListener('click',function(){
		addClass(fireItem, "fire_updown");
		setTimeout( function(){
			lightItem.src="images/light-after.png";
			addClass(lightItem, "light_fly");
			addClass( poem1, "poem");
		}, 1000 );
		setTimeout( function(){
			addClass( poem2, "poem");
		}, 2000 );
	},false);

	

