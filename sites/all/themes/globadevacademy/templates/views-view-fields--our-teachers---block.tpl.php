

<?php //print $fields['field_teacher_facebook_link']->content;?>
<!--
<img alt="slide img" src="<?php // print file_create_url($row->_field_data['nid']['entity']->field_teacher_image['und'][0]['uri']); ?>"/>
-->
<?php // print $fields['title']->content; ?>
<?php // print $fields['field_country']->content; ?>


    <div class="team-item">

      <div class="team-img">
        <img id="teacher-pic" alt="slide img" src="<?php  print file_create_url($row->_field_data['nid']['entity']->field_teacher_image['und'][0]['uri']); ?>"/>
				<div class="normal-text">
					<h3 class="team-name">
            <?php  print $fields['title']->content; ?>
          </h3>
          <span class="subtitle">
            <?php  print  $fields['field_position']->content; ?>
          </span>
			  </div>
      </div>

      <div class="team-content">
				<div class="overly-border"></div>
        <div class="display-table">
          <div class="display-table-cell">
							<h3 class="team-name">
                <?php  print $fields['title']->content; ?>
              </h3>
							<span class="team-title">
                <?php  print $fields['field_position']->content; ?>
              </span>
              <p class="team-desc">
                <?php  print $fields['field_country']->content; ?>
              </p>
						<div class="team-social">
										<a href="<?php print $row->_field_data['nid'] ["entity"]->field_teacher_facebook_txt["und"][0]["value"]; ?>" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
						</div>
          </div>
        </div>
      </div>
    </div>

