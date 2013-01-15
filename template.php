<?php

function transitioncms_preprocess_page(&$vars, $hook) {
  
  // Fixup the title and use group title if present
  $is_og_page = false;
  $title = drupal_get_title();
  $group_node = og_get_group_context();
  $group_title = $group_node->title;
  if ($group_title) $is_og_page = true;

  if ($is_og_page && $group_title <> $title) $title = $title . ' | ' . $group_title;
  $vars['head_title'] = $title;


  // if this is a group, show its name in the header area - otherwise show the site name

  $group_logo = false;
  if ($is_og_page) { // OG page
    $vars['subsite_title'] = $group_title;
    $vars['subsite_logo_link'] = url('node/' . $group_node->nid, array('absolute' => true));
    $vars['subsite_logo_title'] = $group_title . t('home');

    // get logo
    if ($group_node->field_logo[0]['filepath']) {
      $group_logo = theme('imagecache', 'cms_logo', $group_node->field_logo[0]['filepath']);
    }
  }
  else { // non OG page
    $vars['subsite_title'] = variable_get('site_name', 'Transition Network');
    $vars['subsite_logo_link'] = url(null, array('absolute' => true));
    $vars['subsite_logo_title'] = t('home');
  }
  
  if (!$group_logo) { // no group logo, get default
    $group_logo = '<img src="' . base_path() . path_to_theme() . '/logo100.png' . '" alt="CMS logo" id="logo-image" />';
  }
  $vars['logo'] = $group_logo;
  
  
/*img src="<?php print $node->field_logo[0]['filepath']; ?>" alt="Logo - <?php print t('Home'); ?>" id="logo-image" /></a>
*/

  /*
  $vars['classes'] = _classes($vars['layout']);

  if (user_access('administer menu')) { // Edit Nav Menu
    $vars['edit_nav'] = l(theme_image(path_to_theme() .'/images/edit.png', 'Edit Menu', 'Edit Menu'), 'admin/build/menu-customize/primary-links', array('query' => drupal_get_destination(), 'html' => TRUE));
  }
  // body classes
  $body_classes = array($vars['body_classes']);
  // node-edit class
  if (arg(0) == 'node' && (arg(2) == 'edit' || arg(1) == 'add')) {
    $body_classes[] = 'node-edit';
  }

  $vars['body_classes'] = implode(' ', $body_classes); // Concatenate with spaces
*/
}
