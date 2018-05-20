<div class="col-lg-6 col-md-12">
                        <div class="about-img rs-animation-hover">
							<!--
							<img src="sites/all/themes/globaDevAcademy/images/about/about.jpg" alt="img02"/>
											-->
							<!--
							<a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=3f9CAMoj3Ec" title="Video Icon">
							</a>
											-->
							<div class="overly-border"></div>
						</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                    	<div class="about-desc">
                		    <h3>WELCOME TO Our Academy </h3>      
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    	</div>
						<div id="accordion" class="rs-accordion-style1">
						    <div class="card">
						        <div class="card-header" id="headingOne">
						            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          		Our History
						            </h3>
						        </div>
						        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						            <div class="card-body">
						                <?php print $fields['field_history']->content; ?>
						            </div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="card-header" id="headingTwo">
						            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          		Our Mission
						            </h3>
						        </div>
						        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						            <div class="card-body">
                                    <?php print $fields['field_mession']->content; ?>

						            </div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="card-header mb-0" id="headingThree">
						            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          		Our Vision
						            </h3>
						        </div>
						        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						            <div class="card-body">
                                    <?php print $fields['field_vision']->content; ?>

						            </div>
						        </div>
						    </div>
						</div>
                    </div>