<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<title><?php print $head_title; ?></title>
<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lte IE 6]>
	<script type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/js/supersleight-min.js"></script>
<![endif]--></head>
<body class="<?php print $body_classes; ?>">
  <div id="body-container">
  <a name="top" id="navigation-top"></a>
     <div id="skip-nav"><a href="#page"><?php print t('Skip to Main Content'); ?></a></div>
  <div id="header-container">
  <div id="headwrap" class="fullspan">
        <?php if ($top_links): ?>
        <div id="top-links" class="fullspan"><?php print $top_links; ?></div>
        <?php endif; ?>

        <div id="header" class="fullspan clear-block">
        <div id="branding" class="grid-12 clear-block">
        <div id="logo" class="grid-3">
          <a href="<?php print $subsite_logo_link; ?>" title="<?php print $subsite_logo_title; ?>" rel="home"><?php print $logo ?></a>
        </div>
         <div id="site-name" class="grid-9"><?php print $subsite_title; ?></div>
        </div>
      
      <?php print $search_box ?>
      </div>

      </div>
      </div>
      
        <div id="page-container">
        <div id="page" class="container-12 clear-block">
        <div id="main" class="<?php print $classes['main']; ?>">
        <div id="breadcrumb" class="clear-block"><?php print $breadcrumb; ?></div>
        <?php print $messages; ?>
        <?php if ($content_top): ?>
        <div id="content-top-region" class="clear-block"><?php print $content_top; ?></div>
        <?php endif; ?>

        <?php if ($content_top_inline): ?>
        <div id="content-top-inline-region" class="clear-block"><?php print $content_top_inline; ?></div>
        <?php endif; ?>

        <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>
             
        <?php print $help; ?>

        <div id="main-content" class="clear-block">
        <?php print $content; ?>
        </div>

        <?php if ($content_bottom_inline): ?>
        <div id="content-bottom-inline-region" class="clear-block"><?php print $content_bottom_inline; ?></div>
        <?php endif; ?>

        <?php if ($content_bottom): ?>
        <div id="content-bottom-region" class="clear-block"><?php print $content_bottom; ?></div>
        <?php endif; ?>

        <?php print $feed_icons; ?>
      </div><!-- #main -->

      <?php if ($left): ?>
      <div id="sidebar-left" class="sidebar <?php print $classes['left']; ?>"><?php print $left; ?></div>
      <?php endif; ?>

      <?php if ($right): ?>
      <div id="sidebar-right" class="sidebar <?php print $classes['right']; ?>"><?php print $right?></div>
      <?php endif; ?>
  </div>
  </div><!-- #page -->

  <div id="footer-container">
    
    <div id="footer" class="container-12 clear-block">
      <?php $group_title = og_get_group_context()->title; ?>
      <div id="footer-message" class="grid-12 clear-block"><p><?php print $group_title; ?> - a part of the <a href="http://www.transitionnetwork.org" title="Go to the Transition Network main website">Transition Network</a>.</p>      
      </div>
    <a href="http://www.transitionnetwork.org" class="linked"><img src="<?php print base_path() . path_to_theme() ?>/images/transition_logo.gif" class="special" height="54" width="150" alt="Transition Network Logo" title="Go to the Transition Network main website" /></a>
    </div><!-- #footer -->
    </div><!-- #body-wrapper -->
  <?php print $closure; ?>
</body>
</html>
