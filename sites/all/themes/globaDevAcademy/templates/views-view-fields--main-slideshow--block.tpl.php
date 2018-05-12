
<img alt="slide img" src="<?php print file_create_url($row->_field_data['nid']['entity']->field_slide_image['und'][0]['uri']); ?>"/>
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out"> 
                                        <?php print $fields['title']->content; ?>
                                    </h1>
                                    <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc"><br 
                                    class="hidden-sm-dow">
                                    <?php print $fields['field_slide_text_']->content; ?> 
                                </p>  
									
								</div>
							</div>
						</div>
					</div>
