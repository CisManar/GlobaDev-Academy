
<div class="item">
        <img alt="slide img" src="<?php print file_create_url($row->_field_data['nid']['entity']->field_slide_image['und'][0]['uri']); ?>"/>

					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out"><?php print $fields['title']->content; ?></h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                    <?php print $fields['field_slide_text']->content; ?>
                                    </p>  
									<a href="#" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="#" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
        </div>
        
