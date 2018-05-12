<div class="event-img">
    <img id='eventImg' alt="event img" src="<?php print file_create_url($row->_field_data['nid']['entity']->field_event_image['und'][0]['uri']); ?>"/>

                                    <a class="image-link" href="#" title="<?php print $fields['title']->content;?> ">
                                        <i class="fa fa-link"></i>
                                    </a>
			                    </div>
		                    	<div class="events-details sec-color">
                                    <div class="event-date">
                                        <i class="fa fa-calendar"></i>
                                        <span>
                                          <?php print $fields['field_event_date']->content;?> 
                                        </span>
                                    </div>
                                    <h4 class="event-title"><a href="<?php print $row->_field_data['nid'] ["entity"]->field_teacher_facebook_txt["und"][0]["value"]; ?>">
                                      <?php print $fields['title']->content;?>
                                    </a></h4>
                                    <div class="event-meta">
                                        <div class="event-time">
                                            <i class="fa fa-user"></i>
                                            <span>
                                                <?php print $fields['field_lecturer_name']->content;?>
                                            </span>
                                        </div>
                                        <div class="event-location">
                                            <i class="fa fa-map-marker"></i>
                                            <span>
                                               <?php print $fields['field_event_location']->content;?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="event-btn">
                                        <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>