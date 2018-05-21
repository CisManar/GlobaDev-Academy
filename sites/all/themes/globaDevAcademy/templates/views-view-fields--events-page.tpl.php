<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="col-lg-6 col-md-12 unwrap">
                    	<div class="event-item">
                   
	                        <div class="row rs-vertical-middle">
	                        	<div class="col-md-6">
	                        	    <div class="event-img">
	                        	        <img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_event_image['und'][0]['uri']); ?>" alt="events Images" />
                                        <a class="image-link" href="<?php print "?q=node/" . $fields['nid']->content;?>" title="University Tour 2018">
                                            <i class="fa fa-link"></i>
                                        </a>
	                        	    </div>                        		
	                        	</div>
	                        	<div class="col-md-6">
	                    	        <div class="event-content">
	                    	        	<div class="event-meta">
		                    	        	<div class="event-date">
		                    	        		<i class="fa fa-calendar"></i>
                                                <span><?php 

                                                    print $fields['field_event_date']->content; ?> 

                                                </span>
                                                
                                                  
                                                 
		                    	        	</div>
	                    	        		<div class="event-time">
	                    	        			<i class="fa fa-user"></i>
	                    	        			<span><?php print $fields['field_lecturer_name']->content;?></span>
	                    	        		</div>
	                    	        	</div>
	                    	        	<h3 class="event-title"><a href="<?php print "?q=node/" . $fields['nid']->content;?>"><?php print $fields['title']->content;?></a></h3>
                    	        		<div class="event-location">
                    	        			<i class="fa fa-map-marker"></i>
                    	        			<span><?php print $fields['field_event_location']->content;?></span>
                    	        		</div>
	                    	        	<div class="event-desc">
	                    	        		<p>
	                    	        			There are many variations of passag of Lorem Ipsum available, but the majority have suffered.
	                    	        		</p>
	                    	        	</div>
	                    	        	<div class="event-btn">
	                    	        		<a href="events-details.html">Join Event</a>
	                    	        	</div>
	                    	        </div>                    		
                                </div>
                                
	                        </div>                    		
                            </div>
                                
                                </div>  
                