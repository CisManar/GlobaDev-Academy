<div class="testimonial-item">
	<div class="testi-img">
		<img id="teacher-pic" alt="slide img" src="<?php  print file_create_url($row->_field_data['nid']['entity']->field_student_picture['und'][0]['uri']); ?>"/>
	</div>
	<div class="testi-desc">
		<h4 class="testi-name">
			<?php  print $fields['title']->content; ?>
		</h4>
		<p>
			<?php  print $fields['field_student_text']->content; ?>
		</p>
	</div>
</div>

