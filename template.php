<?php

// Set class on body for din-egn
function ulf_esbjerg_preprocess_html(&$variables) {
  $active_trail = menu_get_active_trail();

  if (isset($active_trail[1])) {
    $second_element = $active_trail[1];
    if ($second_element['link_path'] == 'node/3') {
      $variables['classes_array'][] = drupal_clean_css_identifier('your-region');
    }
  }
}

?>
