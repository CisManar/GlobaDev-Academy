<div class="team-item">
              <div class="team-img">
              <img alt="slide img" src="<?php print file_create_url($row->_field_data['nid']['entity']->field_teacher_image['und'][0]['uri']); ?>"/>
              <!--  <img src="images/team/3.jpg" alt="team Image" /> -->
							  <div class="normal-text">
								  <h3 class="team-name"><?php print $fields['title']->content; ?></h3>
                  <span class="subtitle">Assistant Professor</span>
                </div>
              </div>
              <div class="team-content">
                <div class="overly-border"></div>
                <div class="display-table">
                  <div class="display-table-cell">
                    <h3 class="team-name">
                      <a href="teachers-single.html"><?php print $fields['title']->content; ?></a>
                    </h3>
                    <span class="team-title">Assistant Professor</span>
                    <p class="team-desc">Entrusted with planning, implementation and evaluation.
                    </p>
                    <div class="team-social">
                      <a href="<?php print $fields['field_teacher_facebook_txt']->content;?>" class="social-icon"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                      <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                    </div>                    
                  </div>
                </div>
              </div>
          </div>
