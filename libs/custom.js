(function($){
  $(document).ready(function() {
      $(".fancybox").fancybox();
      $(".hdsrcpro h2 > form > #woocommerce-product-search-field").attr("placeholder", "Search...");
      $("#clientid").owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        navigation:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        //singleItem : true,
        //autoHeight : true, 
        transitionStyle:"fade",
        items : 2,    
        itemsDesktop: [1240, 2],       
        itemsTablet : [1121,1],
        itemsMobile : [680,1]     
           
      });
      
      // Gallery activation
      var $gallery = $('.gallery');
      $gallery.vitGallery();
      
      $(".agree-btn").click(function(){
      		var $this = $(this);
    		var postId  = $this.data('id');
		    $this.html('loading...');
		    var data={
				action:'reviews_agree',
				input_value:postId
			};
		   $.ajax({
		   		url:ajaxUrl,
		   		data:data,
		   		success:function(response){
		   			//$this.closest('.num-agreed').text(response);
		   			//console.log();
		   			$this.siblings('.num-agreed').html(response);
				   	$this.html('I Agree');
		   			// $(".recommended-results").empty();
		      //       if(response.length==0){
		      //         var html="<label class='form-sub-label'>No Recommended Charity</label>";
		      //         $(".recommended-results").append(html);
		      //       }else{
		      //       	var html="<br />";
		      //       	for(var i=0; i<response.length; i++){

			     //            var full_title=response[i].title;
			     //            var trimmed_title=response[i].trimmed_title;
			     //            html+="<div class='col-xs-3 res-content' data-id='"+response[i].id+"' id='rescontent"+response[i].id+"'><div class='row'><div class='col-xs-11'><img title='"+full_title+"' class='fullwidth' src='"+response[i].img_url+"' /><h3 class='result-title'>"+trimmed_title+"</h3><input type='submit' class='res-select charity-select cs"+response[i].id+"' value='SELECT'></div></div></div>";

			     //        }
			     //        $(".recommended-results").append(html);
		      //       }
		   		} //end of success

		   }); //end of ajax
	  }); // end of agree-btn click
  }); // end of document.ready
 $(window).on('load', function() { 
	$('#line').addClass('animation-start');
	setTimeout(function(){
			//animateMinus();
			$('#line').removeClass('animation-start');
			$('#line').addClass('animation-start2');
		}, 6000);
	setTimeout(function(){
            compile()
        }, 1000);
	function compile(){
		animatePlus();
		setTimeout(function(){
			animateMinus();
		}, 3000);
	}
	function animatePlus(){
	  var timer;  
	  var min=0;
	  timer=setInterval(function(){ 
	  	min++;
	  	
	  	if(min>110){
	  		clearInterval(timer);
	  	}else{
	  	  	$('.counter-number').text((min)+'%');
	  	}
	  }, 30);
	}
	
	function animateMinus(){
		
	  var timer;  
	  var max=110;
	  var sss=$('.counter-number').text();
	  sss=sss.substring(0,sss.length - 1)
	  	//alert(sss);
	  timer=setInterval(function(){ 
	  	sss--;
	  	
	  	if(sss<100){
	  		clearInterval(timer);
	  	}else{
	  	  	$('.counter-number').text((sss)+'%');
	  	}
	  }, 50);
	}
	
	
	setTimeout(function(){
		animateMinus();
		setTimeout(function(){
            compile2();
            setInterval(compile2,2000);
        }, 1000);
	}, 5000);
	function compile2(){
		animatePlus2();
		setTimeout(function(){
			animateMinus2();
			//alert(1);
		}, 900);
	}
	function animatePlus2(){
	  var timer;  
	  var min=100;
	  timer=setInterval(function(){ 
	  	min++;
	  	
	  	if(min>110){
	  		clearInterval(timer);
	  	}else{
	  	  	$('.counter-number').text((min)+'%');
	  	}
	  }, 50);
	}
	
	function animateMinus2(){
		
	  var timer;  
	  var max=110;
	  var sss=$('.counter-number').text();
	  sss=sss.substring(0,sss.length - 1)
	  	//alert(sss);
	  timer=setInterval(function(){ 
	  	sss--;
	  	
	  	if(sss<100){
	  		clearInterval(timer);
	  	}else{
	  	  	$('.counter-number').text((sss)+'%');
	  	}
	  }, 50);
	}
 });
})(jQuery);

new WOW().init();
