  let d=new Date();
  let y=d.getFullYear();
  year.innerHTML=y;

$(document).ready(function(){
    $(window).scroll(function(){
    	let scroll=$(window).scrollTop()
    	if(scroll>200){
    	$('.fixed-arrow').css('display', 'block')
	    }
	    else{
	    	$('.fixed-arrow').css('display', 'none')
	    }
    })

    $('.fixed-arrow').click(function(){
    	$("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
    })

    // --------------------subscribe---------------------
    $('#btn-subscribe').click(function(){
      let mail=$('#subscribe-email').val()
      $.ajax({
             method: 'post',
             url: '../php-request/subscribe.php',
             data: {email: mail},
             success: function(result){
                $(".result-subscribe").html(result)
             }
      })
    })

   
 $('.lng-a').click(function(){
  let language=$(this).attr('data-lng')

  $.ajax({
    url: 'lng.php',
    method: 'post',
    data: {lng: language},
    success: function(){
      // location.reload()
    }
  })
}) 


});