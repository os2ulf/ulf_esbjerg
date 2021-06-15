<?php

// Set class on body for din-egn
function ulf_esbjerg_preprocess_html(&$variables) {
  $active_trail = menu_get_active_trail();

  if (isset($active_trail[1])) {
    $second_element = $active_trail[1];
    if (isset($second_element['link_path']) && $second_element['link_path'] == 'node/3') {
      $variables['classes_array'][] = drupal_clean_css_identifier('your-region');
    }
  }
}

/**
 * We need to the label like this. Else it will be overwritten by the feature
 * Handling the "course" content-type.
 *
 * @param $variables
 */
function ulf_esbjerg_preprocess_node(&$variables) {
  if(isset($variables['content']['field_purpose'])) {
    $variables['content']['field_purpose']['#title'] = 'Mål';
  }
}

function ulf_esbjerg_preprocess_user_profile(&$variables) {
  // Enable a view for user profile templates.
  $variables['content_by_user_internships']
    = views_embed_view('hjoerring_content_by_user', 'block_4');

}
