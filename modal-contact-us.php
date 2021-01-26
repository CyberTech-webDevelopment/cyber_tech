<!-- ------------------------modal contact us----------------------------------- -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="contact-us-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-white background-site-color">
        <div class="modal-header ">
        	<div>
	            <h3 class="modal-title prototype" id="exampleModalLabel">Contact Us</h3>
        		<div class="modal-header-hr mt-2"></div>
        	</div>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <img src="../icons/close-modal.png" width="25">
	        </button>
      </div>
      <div class="modal-body">
        <div class="form-container contact-form mt-3 contact-us-modal">
            <form method="post" enctype="multipart/form-data" class="send-message">
                <div>
                    <input type="text" name="full-name" placeholder="Full name" class="w-100 required form-inp text-white" data-name="full-name" data-req='true'>
                    <span class="error full-name"></span>
                </div>
                <div>
                    <input type="text" name="company-name" placeholder="Company name" class="w-100" data-name="company-name">
                </div>
                <div>
                     <input id="mail" type="text" name="mail" placeholder="E-mail" class="w-100 required form-inp" data-name="mail" data-req='true'>
                     <span class="error mail"></span>
                </div>
                <div class="input-group w-100 tel-div">
                        <input type="tel" class="form-control required w-100 form-inp text-white" id="input-tel" name="phone" data-name='phone' data-req='true' data-req='true'>
                        <span id="error-msg" class="error phone"></span>
                        <input type="hidden" name="country-name" id="country-name">
                </div>
                <input type="text" name="project-description" placeholder="Project Description" class="w-100" data-name='project-description'>
                <input type="text" name="message" placeholder="Message" class="w-100" data-name="message">
                <div class="mt-5">
                    <label class="">
                         <img src="../icons/attach-file.png" width="30"><span class="file-span pt-1 ml-3" for='upload_file_project'>Attach CV</span>
                         <input type="file" name="file" id="upload_file_project" class="project-file"><span id="err_file" class="ml-3"></span>
                    </label>
                </div>
                <div class="d-flex mt-4" id="chaptcha-parent">
                        <div id="recaptchaid" class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                </div>
                <div class="mt-5">
                    <input type="hidden" name="lng" value="<?php echo $lang_menu?>">
                    <span class="text-white"><strong>Send message</strong></span>
                    <button class="send-message pl-2 pr-2" type="submit"><img src="../icons/send-message.png"></button>
                </div>
                 <p class="mt-3 result"></p>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

