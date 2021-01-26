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

// -------------language----------------------------
  $('.lng-a').click(function(){
    let language=$(this).attr('data-lng')

    $.ajax({
      url: '../lng.php',
      method: 'post',
      data: {lng: language},
      success: function(res){
        if(res){
        location.href="../"+res+"/services.php";
          
        }
      }
    })
  })
});

 