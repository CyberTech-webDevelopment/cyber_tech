$(function(){
  function ValidateEmail(email) {
      var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
      return expr.test(email);
}
let err_name, err_mail, err_phone, file_upload;

$('.form-inp').on('input', function(){
  let name=$(this).attr('data-name')
  let char_count=$(this).val().length
    
   if(name=='full-name'){
       if(char_count<9){
          $('.'+name).html('The Full name must be longer than 9 characters.')
          err_name=0
       }
       else{
            $(this).removeClass('error-border')
          $('.'+name).html('')
          err_name=1
       }
   }
   if(name=='mail'){
     let mail=$('#mail').val()
     console.log(ValidateEmail(mail))
       if(!ValidateEmail(mail)){
          $('.'+name).html('Please enter the valid email.')
          err_mail=0
       }
       else{
          $(this).removeClass('error-border')
          $('.'+name).html('')
          err_mail=1
       }
   }
   else{}
})
// ----------------------validation phone number-------------------------------------
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
var telInput = $("#input-tel"), errorMsg = $("#error-msg")
telInput.intlTelInput({
  initialCountry: "auto",
   // defaultCountry: "auto",
    geoIpLookup: function(success, failure) {
        $.get("http://ip-api.com/json/", function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.countryCode.toLowerCase()) ? resp.countryCode : "am";
            success(countryCode);
            if(resp.countryCode.toLowerCase()=='am'){
            }
        });
    },
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js",
});

var reset = function() {
    telInput.removeClass("error");
    errorMsg.html('');
    errorMsg.addClass("hide");
};
telInput.on('input', function() {
    reset();
    if ($.trim(telInput.val())){
        if (telInput.intlTelInput("isValidNumber")){
          err_phone=1
        } 
        else {
          err_phone=0
          var errorCode = telInput.intlTelInput("getValidationError");
          errorMsg.html(errorMap[errorCode])
            telInput.addClass("error");
            errorMsg.removeClass("hide");
            $(this).removeClass('error-border')
        }
    }
});

$('.project-file').on('input', function(){
   $('#err_file').html('')
   file_upload = $(this).prop('files')[0];
   let file_name=file_upload.name
   let file_arr=file_name.split('.')
   let file_type=file_arr[file_arr.length-1].toLowerCase()
   files_type=['png', 'jpg', 'jpeg', 'doc', 'docm', 'docx', 'dotx', 'dotm', 'pdf']
   
   for (let i=0; i<files_type.length; i++){
      if(file_type==files_type[i]){
        $('#err_file').html('File uploaded')
        $('#err_file').addClass('text-success')
        $('#err_file').removeClass('text-danger')
        file_upload=1
        break;
      }
      else{
        $('#err_file').html('Please enter right format. ')
        $('#err_file').addClass('text-danger')
        $('#err_file').removeClass('text-success')
        file_upload=0
      }
   }

})
$('.send-message').on('submit', function(event){
  event.preventDefault()
     let captchaid = $("#recaptchaid")
     let response = grecaptcha.getResponse();
     let country_name=$('.selected-flag').attr('title')
     $('#country-name').val(country_name)
     console.log(country_name)
    if (response.length === 0) {
        $('#recaptchaid').css('border','1px solid red');
     } 
     else{
        $('#recaptchaid').css('border','none');
      }
    
      $('.required').each(function(){
        if($(this).val()=='' || $(this).attr('data-req')=='false'){
           $(this).addClass('error-border')
        }
        else{
           $(this).removeClass('error-border')
        }
      })
  if(err_name==1 && err_phone==1 && err_mail==1 && file_upload!=0 && response.length>1){
    console.log('ok')
    $.ajax({
      url:"../php-request/send-message.php",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      beforeSend:function(){
        $('.result').html('Sending...');

      },
      success:function(data){
        console.log(data)
        $('.result').html(data)
      }
    })
  }
})
})
