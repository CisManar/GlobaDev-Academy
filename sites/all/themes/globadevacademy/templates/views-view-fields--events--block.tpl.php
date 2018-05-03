<div class="event-item">
    <div class="event-img">
    <img id="teacher-pic" alt="slide img" src="<?php  print file_create_url($row->_field_data['nid']['entity']->field_event_image['und'][0]['uri']); ?>"/>
            <a class="image-link" href="events-details.html" title="University Tour 2018">     
                <i class="fa fa-link"></i>                        
            </a>                   	                     
	</div>
	<div class="events-details sec-color">
        <div class="event-date">
            <i class="fa fa-calendar"></i>
            <span>
                <?php print $fields['field_event_date']->content; ?>
            </span>
        </div>
        <h4 class="event-title"><a href="events-details.html">
            <?php  print $fields['title']->content; ?>
        </a></h4>
        <div class="event-meta">
            <div class="event-time">
                <i class="fa fa-user"></i>
                <span>
                    <?php print $fields['field_lecturer_name']->content; ?>
                </span>
            </div>
            <div class="event-location">
                <i class="fa fa-map-marker"></i>
                <span>
                    <?php print $fields['field_event_location']->content; ?>
                </span>
            </div>
        </div>
        <div class="event-btn">
            <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>
</div>
			                