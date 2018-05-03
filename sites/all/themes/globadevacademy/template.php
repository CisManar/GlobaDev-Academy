<?php

 function globadevacademy_preprocess_html(&$vars) {
    $node = menu_get_object();
    if ($node && isset($node->nid)) {
      $node = node_load($node->nid);
      node_build_content($node);
      $vars['field_our_email'] = render($node->content['field_our_email']);
    }
  }


?>