
	<?php include "../navbar.php" ?>
	<!-- -----------------------------------------services------------------------------------------- -->
<section class="w-100 services-section pb-5 pt-5">
	<div class="container">
		<h2 class="prototype site-color text-center">Join Our Team</h2>
		<p class="text-center site-color roboto"><strong>Want to start a project? Its simple - Start now!</strong></p>
		<div class="w-100 text-center">
			<button class="background-site-color text-white prototype join-our-team-call-to-action pl-5 pr-5 pt-2 pb-2 ml-auto mr-auto">Call To Action</button>
		</div>
		<div class="hexagon-container mt-4">
			<div class="hexagon-divs d-flex flex-wrap text-center mt-3 justify-content-center">
	            <div class=" hexagon text-center align-items-center prototype">
				     UI/UX <br> DESIGNER
				</div>
				<div class=" hexagon text-center align-items-center prototype">
				     Web <br> Developer
				</div>
				<div class=" hexagon hex-active text-center align-items-center prototype">
				     UI/UX <br> DESIGNER
				</div>
				<div class=" hexagon text-center align-items-center prototype">
				     UI/UX <br> DESIGNER
				</div>
				<div class=" hexagon text-center align-items-center prototype">
				     UI/UX <br> DESIGNER
				</div>
				<div class=" hexagon text-center align-items-center prototype">
				     UI/UX <br> DESIGNER
				</div>
				<div class=" hexagon text-center align-items-center prototype">
				     UI/UX <br> DESIGNER
				</div>
				<div class=" hexagon text-center align-items-center prototype">
				     Web <br> Developer
				</div>
				<div class=" hexagon text-center align-items-center prototype">
				     Web <br> Developer
				</div>
			</div>
		</div>

		<div class="w-100 mt-5">
		     <h2 class="prototype site-color text-uppercase">UI/UX designer</h2>
		     <div class="job-description mt-4 pl-2 pr-2 pt-4 pb-4">
		     	<h4 class="text-capitalize">Job description</h4>
		     	<div class="">We are looking for a UI/UX designer with passion and enthusiasm to join our friendly team.
                     The ideal candidate should have a good eye for design, be able to take the initiative on their own, and be excited to learn new skills and experiment as the industry continues to evolve.
                 </div>
		     </div>
		</div>

		<div class="w-100 mt-4 pl-2 pr-2 qualifications">
			<h4 class="text-capitalize">Required qualifications</h4>
			<div class="mt-4">
				<ul class="w-75 ml-4">
					<li><span>Strong at UI/UX design</span></li>
					<li><span>3+ years of experience</span></li>
					<li><span>Meet with clients to discuss their requirements</span></li>
					<li><span>Communication skills</span></li>
					<li><span>Work with other web specialists including web developers and project managers</span></li>
					<li><span>Design, build or maintain websites and mobile applications using authoring or scripting languages, management tools and digital media</span></li>
					<li><span>Creativity</span></li>
					<li><span>Design sample page layouts including text size and colors</span></li>
				</ul>
			</div>
		</div>

		<div class="w-100 mt-5 pl-2 pr-2 qualifications">
			<h4 class="text-capitalize">Technical skill-set</h4>
			<div class="mt-4">
				<ul class="w-75 ml-4">
					<li><span>Adobe Photoshop</span></li>
					<li><span>Adobe Illustrator</span></li>
					<li><span>Figma/Sketch/Invision</span></li>
					<li><span>Adobe XD</span></li>
				</ul>
			</div>
		</div>

		<div class="w-100 mt-5 applications">
			<h4 class="text-capitalize site-color">Application</h4>
			<div class="mt-4 w-75">
				<form method="post" enctype="multipart/form-data" id="join-team-btn">
					<div>
        		        <input type="text" name="full-name" placeholder="Full name" class="w-100 inp required" data-name='full-name' data-req='true'>
						<span class="error full-name"></span>
					</div>
					<div>
        		        <input type="text" name="mail" placeholder="E-mail" class="w-100 inp required" data-name='mail' id="mail" data-req='true'>
						<span class="error mail"></span>
					</div>
					<div class="input-group w-100 tel-div">
						  <input type="tel" class="form-control required w-100 inp" id="input-tel" name="phone" data-name='phone' data-req='true'>
						  <span id="error-msg" class="error phone"></span>
						  <input type="hidden" name="country-name" id="country-name">
					</div>
					<div>
						<select class="w-100 sel_vacancy required" data-req='false' name='vacancy'>
							<option>select vacancy</option>
							<option>title vacancy</option>
							<option>title vacancy</option>
							<option>title vacancy</option>
							<option>title vacancy</option>
							<option>title vacancy</option>
						</select>
					</div>
        		    <div>
        		        <input type="text" name="link" placeholder="Portfolio link inp" class="w-100" data-name='portfolio-link'>
        		    </div>
	                <div class="mt-5" >
	                	<label class="">
	                		<img src="../icons/attach-black.png" width="30"><span class="file-span pt-1 ml-3" for='upload_file'>Attach CV</span>
	                	    <input type="file" name="file" id="upload_file"><span id="err_file" class="ml-3"></span>
	                    </label>
	                </div>
	                <div class="d-flex mt-4" id="chaptcha-parent">
						  	<div id="recaptchaid" class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
					</div>
                	<input type="hidden" name="lng" value="<?php echo $lang_menu?>">
	                <div class="mt-3">
	                	<button class="join-team-btn site-color prototype" type="submit">Submit</button>
	                </div>
	                <p class="mt-3 result"></p>
        	</form>
			</div>
			
		</div>

	</div>
</section>