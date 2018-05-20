<?php /*
<?php print $row->_field_data['nid'] ["entity"]->field_teacher_facebook_txt["und"][0]["value"]; ?>

<?php print file_create_url($row->_field_data['nid']['entity']->field_slide_image['und'][0]['uri']); ?>

*/ ?>
<div class="team-img">
    
    <img src="<?php print file_create_url($row->_field_data['nid']['entity']->field__teacher_image['und'][0]['uri']); ?>" alt="team Image" />
        
    <div class="normal-text">
		<h3 class="team-name">
            <?php print $fields['title']->content; ?>
        </h3>
            <span class="subtitle">
                <?php print $fields['field_position']->content; ?>
            </span>
	</div>
</div>
                        
<div class="team-content">
	<div class="overly-border"></div>
    <div class="display-table">
        <div class="display-table-cell">
			<h3 class="team-name">
                <a href="teachers-single.html">
                <?php print $fields['title']->content; ?>
                </a>
            </h3>
			<span class="team-title">
            <?php print $fields['field_position']->content; ?>
            </span>
            <p class="team-desc">
                <?php print $fields['field_country']->content; ?>
            </p>
			<div class="team-social">
                                        
                <a href="<?php print $row->_field_data['nid'] ["entity"]->field_teacher_facebook["und"][0]["value"]; ?>" class="social-icon"><i class="fa fa-facebook"></i></a>

                <a href="<?php print $row->_field_data['nid'] ["entity"]->field_teacher_google_plus["und"][0]["value"]; ?>" class="social-icon"><i class="fa fa-google-plus"></i></a>
                
                <a href="<?php print $row->_field_data['nid'] ["entity"]->field_teacher_twitter["und"][0]["value"]; ?>" class="social-icon"><i class="fa fa-twitter"></i></a>
                
                <a href="<?php print $row->_field_data['nid'] ["entity"]->field_teacher_linkedin["und"][0]["value"]; ?>" class="social-icon"><i class="fa fa-linkedin"></i></a>

			</div>
        </div>
    </div>
</div>
