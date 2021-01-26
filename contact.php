<?php include "../navbar.php" ?>
	<!-- -----------------------------------------contact------------------------------------------- -->
<section class="w-100 contact-section pb-5 pt-5">
	<div class="container">
		<h2 class="prototype site-color text-center">Contact</h2>
		<p class="text-center site-color roboto"><strong>Want to keep driving your business? Want to start a project? - Its simple with us.</strong></p>
		<div class="w-100 text-center">
			<a href="#contact"><button class="background-site-color text-white prototype contact-start-now ml-auto mr-auto" >Start Now</button></a>
		</div>
	</div>
	<div class="container mt-5">
		<div class="d-flex w-100 map-contact-container">
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1811.8297301316281!2d44.51829274527468!3d40.20634348776069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1610447571014!5m2!1sru!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="background-site-color d-flex align-items-center">
				<div class="contact-right text-white ml-5">
					<div class="">
						<span><img src="<?php echo $lng_folder?>icons/contact-location.png" class='img-location'></span>
						<span class="font-size-18 roboto ml-2">Yerevan, Komitas Ave.</span>
					</div>
					<div class="mt-3">
						<span><img src="<?php echo $lng_folder?>icons/contact-phone.png" class="img-phone"></span>
						<span class="font-size-18 roboto ml-2">+37496111212</span>
					</div>
					<div class="mt-3">
						<span ><img src="<?php echo $lng_folder?>icons/mail.png" class="img-mail"></span>
						<span class="font-size-18 roboto ml-2">cybertech@gmail.com</span>
					</div>
					<div class="d-flex mt-5">
						<div class="mr-4"><img src="<?php echo $lng_folder?>icons/facebook-icon.png"></div>
						<div class="mr-4"><img src="<?php echo $lng_folder?>icons/linkedin-icon.png"></div>
						<div class="mr-4"><img src="<?php echo $lng_folder?>icons/twitter-icon.png"></div>
					</div>
				</div>
			</div>
	   </div>
	</div>
	<div class="container mt-5" id="contact">
		<div>
	        <h3 class="modal-title prototype site-color" id="exampleModalLabel">Contact Us</h3>
        	<div class="contact-hr mt-2"></div>
        </div>
		<div class="form-container contact-form mr-5 pr-5 mt-3">
        	<form method="post" enctype="multipart/form-data" class="send-message">
        		<div>
	        		<input type="text" name="full-name" placeholder="Full name" class="w-100 required form-inp" data-name="full-name" data-req='true'>
	        		<span class="error full-name"></span>
        		</div>
        		<div>
	        		<input type="text" name="company-name" placeholder="Company name" class="w-100" data-name="company-name">
        		</div>
        		<div>
        		     <input id="mail" type="text" name="mail" placeholder="E-mail" class="w-100 required form-inp" data-name="mail" data-req='true'>
					 <span class="error mail"></span>
        		</div>
        		<!-- <input type="text" name="" placeholder="Phone" class="w-100"> -->
        		<div class="input-group w-100 tel-div">
						<input type="tel" class="form-control required w-100 form-inp" id="input-tel" name="phone" data-name='phone' data-req='true' data-req='true'>
						<span id="error-msg" class="error phone"></span>
						<input type="hidden" name="country-name" id="country-name">
			    </div>
        		<input type="text" name="project-description" placeholder="Project Description" class="w-100" data-name='project-description'>
        		<input type="text" name="message" placeholder="Message" class="w-100" data-name="message">
                <div class="mt-5">
                	<label class="">
	                	 <img src="../icons/attach-black.png" width="30"><span class="file-span pt-1 ml-3" for='upload_file_project'>Attach CV</span>
	                	 <input type="file" name="file" id="upload_file_project" class="project-file"><span id="err_file" class="ml-3"></span>
	                </label>
                </div>
                <div class="d-flex mt-4" id="chaptcha-parent">
						<div id="recaptchaid" class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
				</div>
                <div class="mt-5">
                	<span class="site-color"><strong>Send message</strong></span>
                	<button class="send-message pl-2 pr-2" type="submit"><img src="../icons/send-message.png"></button>
	                	<!-- <button class="join-team-btn site-color prototype" type="submit">Submit</button> -->
                </div>
	             <p class="mt-3 result"></p>
        	</form>
        </div>
	</div>
</section>